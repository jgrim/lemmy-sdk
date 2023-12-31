<?php

namespace JGrim\Lemmy\Sdk\Models\Enums\Trait;

trait GetEnumTypes
{
    public static function getAllValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getAllTypes(): array
    {
        return array_column(self::cases(), 'name');
    }
}
