<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModBan implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $other_person_id;
    public ?string $reason = null;
    public bool $banned;
    public ?string $expires = null;
    public string $when_;
}
