<?php

declare(strict_types=1);

namespace AntKaz\Intercom\Exception;

class InvalidSignatureException extends \RuntimeException
{
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Invalid signature header', 1, $previous);
    }

}
