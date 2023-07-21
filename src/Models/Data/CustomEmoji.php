<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final  class CustomEmoji implements Model
{
    public int $id;
    public int $local_site_id;
    public string $shortcode;
    public string $image_url;
    public string $alt_text;
    public string $category;
    public string $published;
    public ?string $updated = null;
}
