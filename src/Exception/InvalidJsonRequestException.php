<?php

declare(strict_types=1);

namespace AntKaz\Intercom\Exception;

class InvalidJsonRequestException extends \RuntimeException
{
    public function __construct(\Throwable $previous = null)
    {
        parent::__construct('Invalid json request', 3, $previous);
    }
}
