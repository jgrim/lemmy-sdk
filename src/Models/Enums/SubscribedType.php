<?php

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum SubscribedType: string
{
    case Subscribed = 'Subscribed';
    case NotSubscribed = 'NotSubscribed';
    case Pending = 'Pending';
}
