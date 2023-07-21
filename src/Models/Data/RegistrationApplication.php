<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class RegistrationApplication implements Model
{
    public int $id;
    public int $local_user_id;
    public string $answer;
    public ?int $admin_id = null;
    public ?string $deny_reason = null;
    public string $published;
}
