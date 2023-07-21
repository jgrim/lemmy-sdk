<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum RegistrationMode: string
{
    use GetEnumTypes;

    case CLOSED = 'Closed';
    case REQUIRE_APPLICATION = 'RequireApplication';
    case OPEN = 'Open';
}
