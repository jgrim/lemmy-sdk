<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModRemoveCommunity implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $community_id;
    public ?string $reason = null;
    public bool $removed;
    public ?string $expires = null;
    public string $when_;
}
