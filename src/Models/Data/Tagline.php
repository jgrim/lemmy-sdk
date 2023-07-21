<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Tagline implements Model
{
    public int $id;
    public int $local_site_id;
    public string $content;
    public string $published;
    public ?string $updated = null;
}
