<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PrivateMessageReport implements Model
{
    public int $id;
    public int $creator_id;
    public int $private_message_id;
    public string $original_pm_text;
    public string $reason;
    public bool $resolved;
    public ?int $resolver_id;
    public string $published;
    public ?string $updated = null;
}
