<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum SubscribedType: string
{
    case Subscribed = 'Subscribed';
    case NotSubscribed = 'NotSubscribed';
    case Pending = 'Pending';
}
