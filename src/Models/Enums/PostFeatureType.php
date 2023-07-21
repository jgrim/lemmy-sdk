<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum PostFeatureType: string
{
    use GetEnumTypes;

    case LOCAL = 'Local';
    case COMMUNITY = 'Community';
}
