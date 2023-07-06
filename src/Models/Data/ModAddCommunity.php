<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModAddCommunity implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $other_person_id;
    public int $community_id;
    public bool $removed;
    public string $when_;
}
