<?php

declare(strict_types=1);

namespace AntKaz\Intercom\Model;

/**
 * Class Notification
 */
class Notification
{
    /**
     * Value is 'notification_event'
     *
     * @var string
     */
    private $type;

    /**
     * Namespace ID
     *
     * @var string
     */
    private $app_id;

    /**
     * Notification ID
     *
     * @var string
     */
    private $id;

    /**
     * URL for the subscription
     *
     * @var string
     */
    private $self;

    /**
     * The timestamp the notification was created
     *
     * @var int
     */
    private $created_at;

    /**
     * Corresponds to a topic, eg 'company.created', 'conversation.assigned'
     *
     * @var string
     */
    private $topic;

    /**
     * The number of times this notification has been attempted
     *
     * @var int
     */
    private $delivery_attempts;

    /**
     * The first time the delivery was attempted
     *
     * @var int
     */
    private $first_sent_at;

    /**
     * A container for the data associated with the notification
     *
     * The data associated with the notification, which will have a type
     *
     * @var mixed[]
     */
    private $data;

    /**
     * Notification constructor.
     *
     * @param mixed[] $data
     */
    public function __construct(array $data)
    {
        $properties = \get_object_vars($this);

        foreach ($properties as $name => $value) {
            $this->$name = $data[$name] ?? null;
        }
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get namespace ID
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->app_id;
    }

    /**
     * Get Notification ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get URL for the subscription
     *
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Get timestamp was created notification
     *
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->created_at;
    }

    /**
     * Get notification topic
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * Get number of times this notification has been attempted
     * @return int
     */
    public function getDeliveryAttempts(): int
    {
        return $this->delivery_attempts;
    }

    /**
     * Get first time the delivery was attempted
     *
     * @return int
     */
    public function getFirstSentAt(): int
    {
        return $this->first_sent_at;
    }

    /**
     * Get notification data
     *
     * @return mixed[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}
