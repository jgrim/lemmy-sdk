<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class CustomEmojiKeyword implements Model
{
    public int $id;
    public int $custom_emoji_id;
    public string $keyword;
}
