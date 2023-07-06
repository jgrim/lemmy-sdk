<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

class ModRemoveComment implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $comment_id;
    public ?string $reason = null;
    public bool $removed;
    public string $when_;
}
