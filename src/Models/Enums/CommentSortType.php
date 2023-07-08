<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum CommentSortType: string
{
    case Host = 'Hot';
    case Top = 'Top';
    case New = 'New';
    case Old = 'Old';
}
