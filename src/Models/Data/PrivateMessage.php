<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PrivateMessage implements Model
{
    public int $id;
    public int $creator_id;
    public int $recipient_id;
    public string $content;
    public bool $deleted;
    public bool $read;
    public string $published;
    public ?string $updated = null;
    public string $ap_id;
    public bool $local;
}
