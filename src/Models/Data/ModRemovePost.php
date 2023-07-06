<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class ModRemovePost implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $post_id;
    public ?string $reason = null;
    public int $removed;
    public string $when_;
}
