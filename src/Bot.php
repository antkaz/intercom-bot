<?php

declare(strict_types=1);

namespace AntKaz\Intercom;

use AntKaz\Intercom\Exception\InvalidJsonRequestException;
use AntKaz\Intercom\Exception\VerifySignatureException;
use AntKaz\Intercom\Model\NotificationFactory;

/**
 * Bot to handle Intercom notifications
 */
class Bot
{
    /**
     * Intercom client
     *
     * @var Client
     */
    private $client;


    /**
     * Notification handlers
     *
     * @var \Closure[]
     */
    private $handlers = [];

    /**
     * Bot constructor
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get Intercom client
     *
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Get request input stream
     *
     * @return string
     */
    public function getInputBody(): string
    {
        return \file_get_contents('php://input');
    }

    /**
     * Add notification handler
     *
     * @param string $topic
     * @param \Closure $handler
     *
     * @return Bot
     */
    public function addHandler(string $topic, \Closure $handler): Bot
    {
        $this->handlers[$topic] = $handler;

        return $this;
    }

    /**
     * Run handlers
     *
     * @param Signature $signature
     */
    public function run(Signature $signature): void
    {
        $body = $this->getInputBody();

        if (!$signature->verify($body, $this->client->getClientSecret())) {
            throw new VerifySignatureException();
        }

        $data = \json_decode($body, true);

        if ($data === null || \json_last_error()) {
            throw new InvalidJsonRequestException();
        }

        $notification = NotificationFactory::makeFromArray($data);

        if (!isset($this->handlers[$notification->getTopic()])) {
            return;
        }

        $this->handlers[$notification->getTopic()]($notification);
    }

}
