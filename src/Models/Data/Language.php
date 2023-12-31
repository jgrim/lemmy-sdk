<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Language implements Model
{
    public int $id;
    public string $code;
    public string $name;
}
