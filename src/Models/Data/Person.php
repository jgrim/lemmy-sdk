<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Person implements Model
{
    public int $id;
    public string $name;
    public ?string $displayName = null;
    public ?string $avatar = null;
    public bool $banned;
    public string $published;
    public ?string $updated = null;
    public string $actorId = '';
    public ?string $bio = null;
    public bool $local;
    public ?string $banner = null;
    public bool $deleted;
    public string $inboxUrl = '';
    public ?string $matrixUserId = null;
    public bool $admin;
    public bool $botAccount = false;
    public ?string $banExpires = null;
    public int $instanceId = 0;
}
