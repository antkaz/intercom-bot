<?php

declare(strict_types=1);

namespace AntKaz\Intercom;

use AntKaz\Intercom\Exception\InvalidSignatureException;

class Parser
{
    /**
     * @var string
     */
    private $algorithm;

    /**
     * Parser constructor.
     *
     * @param string $algorithm
     */
    public function __construct(string $algorithm = null)
    {
        $this->algorithm = $algorithm;
    }

    /**
     * Parse HTTP header with Intercom signature
     *
     * @param string $header
     *
     * @return Signature
     */
    public function parse(string $header): Signature
    {
        $data = $this->splitHeader($header);

        $algoritm = $this->algorithm ?: $data[0];

        return new Signature($algoritm, $data[1]);
    }

    /**
     * Split the notification signature into an array
     *
     * @param string $header
     *
     * @return string[]
     */
    private function splitHeader(string $header): array
    {
        $data = \explode('=', $header);

        if (\count($data) !== 2) {
            throw new InvalidSignatureException();
        }

        return $data;
    }

}
