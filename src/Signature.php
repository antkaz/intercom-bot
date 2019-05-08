<?php

declare(strict_types=1);

namespace AntKaz\Intercom;

/**
 * Class Signature parses the HTTP header with signature and convert into class properties
 */
class Signature
{
    /**
     * Encryption algorithm
     *
     * @var string
     */
    private $algorithm;

    /**
     * Notification signature
     *
     * @var string
     */
    private $signature;

    /**
     * Signature constructor.
     *
     * @param string $algorithm
     * @param string $signature
     */
    public function __construct(string $algorithm, string $signature)
    {
        $this->algorithm = $algorithm;
        $this->signature = $signature;
    }

    /**
     * Generate the signature
     *
     * @param string $body
     * @param string $clientSecret
     *
     * @return string
     */
    public function make(string $body, string $clientSecret): string
    {
        return \hash_hmac($this->algorithm, $body, $clientSecret);
    }

    /**
     * Verify the notification signature
     *
     * @param string $body
     * @param string $clientSecret
     *
     * @return bool
     */
    public function verify(string $body, string $clientSecret): bool
    {
        return \hash_equals($this->signature, $this->make($body, $clientSecret));
    }
}
