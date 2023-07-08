<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModBanFromCommunity implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $other_person_id;
    public int $community_id;
    public ?string $reason = null;
    public bool $banned;
    public ?string $expires = null;
    public string $when_;
}
