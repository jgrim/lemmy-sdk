<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModLockPost implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $post_id;
    public bool $locked;
    public string $when_;
}
