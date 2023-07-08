<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModAdd implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $other_person_id;
    public bool $removed;
    public string $when_;
}
