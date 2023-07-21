<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class AdminPurgeCommunity implements Model
{
    public int $id;
    public int $admin_person_id;
    public ?string $reason = null;
    public string $when_;
}
