<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

use JGrim\Lemmy\Sdk\Models\Enums\Trait\GetEnumTypes;

enum SortType: string
{
    use GetEnumTypes;

    case ACTIVE = 'Active';
    case HOT = 'Hot';
    case NEW = 'New';
    case OLD = 'Old';
    case TOP_DAY = 'TopDay';
    case TOP_WEEK = 'TopWeek';
    case TOP_MONTH = 'TopMonth';
    case TOP_YEAR = 'TopYear';
    case TOP_ALL = 'TopAll';
    case MOST_COMMENTS = 'MostComments';
    case NEW_COMMENTS = 'NewComments';
    case TOP_HOUR = 'TopHour';
    case TOP_SIX_HOUR = 'TopSixHour';
    case TOP_TWELVE_HOUR = 'TopTwelveHour';
    case TOP_THREE_MONTHS = 'TopThreeMonths';
    case TOP_SIX_MONTHS = 'TopSixMonths';
    case TOP_NINE_MONTHS = 'TopNineMonths';
}
