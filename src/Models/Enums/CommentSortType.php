<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum CommentSortType: string
{
    use GetEnumTypes;

    case Host = 'Hot';
    case Top = 'Top';
    case New = 'New';
    case Old = 'Old';
}
