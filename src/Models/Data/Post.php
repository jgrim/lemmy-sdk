<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Post implements Model
{
    public int $id;
    public string $name;
    public ?string $url = null;
    public ?string $body = null;
    public int $creator_id;
    public int $community_id;
    public bool $removed;
    public bool $locked;
    public string $published;
    public ?string $updated = null;
    public bool $deleted;
    public bool $nsfw;
    public ?string $embed_title = null;
    public ?string $embed_description = null;
    public ?string $thumbnail_url = null;
    public string $ap_id;
    public bool $local;
    public ?string $embed_video_url = null;
    public int $language_id;
    public bool $featured_community;
    public bool $featured_local;
}
