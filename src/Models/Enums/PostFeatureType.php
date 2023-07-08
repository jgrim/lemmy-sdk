<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Enums;

enum PostFeatureType: string
{
    case Local = 'Local';
    case Community = 'Community';
}
