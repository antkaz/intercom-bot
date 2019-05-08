<?php
/**
 * The following topics are available and you can be notified when an action relating to that topic occurs.
 *
 * @see https://developers.intercom.com/building-apps/docs/webhook-model#section-webhook-topics
 */

declare(strict_types=1);

namespace AntKaz\Intercom;

/**
 * Notification topic
 */
abstract class Topic
{
    public const CONVERSATION_USER_CREATED = 'conversation.user.created';
    public const CONVERSATION_USER_REPLIED = 'conversation.user.replied';
    public const CONVERSATION_ADMIN_REPLIED = 'conversation.admin.replied';
    public const CONVERSATION_ADMIN_SINGLE_CREATED = 'conversation.admin.single.created';
    public const CONVERSATION_ADMIN_ASSIGNED = 'conversation.admin.assigned';
    public const CONVERSATION_ADMIN_NOTED = 'conversation.admin.noted';
    public const CONVERSATION_ADMIN_CLOSED = 'conversation.admin.closed';
    public const CONVERSATION_ADMIN_OPENED = 'conversation.admin.opened';
    public const CONVERSATION_ADMIN_UNSNOOZED = 'conversation.admin.unsnoozed';

    public const CONVERSATION_PART_TAG_CREATED = 'conversation_part.tag.created';

    public const USER_CREATED = 'user.created';
    public const USER_DELETED = 'user.deleted';
    public const USER_UNSUBSCRIBED = 'user.unsubscribed';
    public const USER_EMAIL_UPDATED = 'user.email.updated';
    public const USER_TAG_CREATED = 'user.tag.created';
    public const USER_TAG_DELETED = 'user.tag.deleted';

    public const CONTACT_CREATED = 'contact.created';
    public const CONTACT_SIGNED_UP = 'contact.signed_up';
    public const CONTACT_ADDED_EMAIL = 'contact.added_email';
    public const CONTACT_TAG_CREATED = 'contact.tag.created';
    public const CONTACT_TAG_DELETED = 'contact.tag.deleted';

    public const VISITOR_SIGNED_UP = 'visitor.signed_up';

    public const COMPANY_CREATED = 'company.created';

    public const EVENT_CREATED = 'event.created';

    public const PING = 'ping';

}
