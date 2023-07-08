<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class SiteMetadata implements Model
{
    public ?string $title = null;
    public ?string $description = null;
    public ?string $image = null;
    public ?string $embed_video_url = null;
}
