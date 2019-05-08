<?php

declare(strict_types=1);

namespace AntKaz\Intercom\Exception;

use Throwable;

class VerifySignatureException extends \RuntimeException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct('Signature verification failed', 2, $previous);
    }
}
