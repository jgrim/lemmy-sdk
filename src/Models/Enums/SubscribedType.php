<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum SubscribedType: string
{
    use GetEnumTypes;

    case SUBSCRIBED = 'Subscribed';
    case NOT_SUBSCRIBED = 'NotSubscribed';
    case PENDING = 'Pending';
}
