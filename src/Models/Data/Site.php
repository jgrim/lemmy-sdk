<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Site implements Model
{
    public int $id;
    public string $name;
    public ?string $sidebar = null;
    public string $published;
    public ?string $updated = null;
    public ?string $icon = null;
    public ?string $banner = null;
    public ?string $description = null;
    public string $actor_id;
    public string $last_refreshed_at;
    public string $inbox_url;
    public ?string $private_key = null;
    public string $public_key;
    public int $instance_id;
}

