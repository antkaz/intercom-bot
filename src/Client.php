<?php

declare(strict_types=1);

namespace AntKaz\Intercom;

/**
 * Client to work with Intercom
 */
class Client
{
    /**
     * Access token
     *
     * @var string
     */
    private $token;

    /**
     * Client secret
     *
     * @var string
     */
    private $clientSecret;

    /**
     * Client constructor.
     *
     * @param string $token
     * @param string $clientSecret
     */
    public function __construct(string $token, string $clientSecret)
    {
        $this->token = $token;
        $this->clientSecret = $clientSecret;
    }

    /**
     * Get access token
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Get Client Secret
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

}
