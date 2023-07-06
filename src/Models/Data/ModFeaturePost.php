<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

class ModFeaturePost implements Model
{
    public int $id;
    public int $mod_person_id;
    public int $post_id;
    public bool $featured;
    public string $when_;
    public bool $is_featured_community;
}
