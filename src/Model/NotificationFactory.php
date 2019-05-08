<?php

declare(strict_types=1);

namespace AntKaz\Intercom\Model;

/**
 * Notification factory
 */
class NotificationFactory
{
    /**
     * Create notification object from array data
     *
     * @param mixed[] $data
     *
     * @return Notification
     */
    public static function makeFromArray(array $data): Notification
    {
        return new Notification($data);
    }
}
