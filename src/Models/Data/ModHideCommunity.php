<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModHideCommunity implements Model
{
    public int $id;
    public int $community_id;
    public int $mod_person_id;
    public string $when_;
    public ?string $reason = null;
    public bool $hidden;
}
