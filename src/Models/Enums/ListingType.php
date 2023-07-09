<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum ListingType: string
{
    use GetEnumTypes;

    case All = 'All';
    case Local = 'Local';
    case Subscribed = 'Subscribed';
}
