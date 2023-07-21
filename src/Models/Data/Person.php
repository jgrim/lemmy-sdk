<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Person implements Model
{
    public int $id;
    public string $name;
    public ?string $display_name = null;
    public ?string $avatar = null;
    public bool $banned;
    public string $published;
    public ?string $updated = null;
    public string $actor_id;
    public ?string $bio = null;
    public bool $local;
    public ?string $banner = null;
    public bool $deleted;
    public ?string $inbox_url = null; // @todo, should this be optional
    public ?string $shared_inbox_url = null; // @todo, should this be optional
    public ?string $matrix_user_id = null;
    public bool $admin;
    public bool $bot_account;
    public ?string $ban_expires = null;
    public int $instance_id;
}
