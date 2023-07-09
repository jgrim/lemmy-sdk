<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum SearchType: string
{
    use GetEnumTypes;

    case ALL = 'All';
    case COMMENTS = 'Comments';
    case POSTS = 'Posts';
    case COMMUNITIES = 'Communities';
    case USERS = 'Users';
    case URL = 'Url';
}
