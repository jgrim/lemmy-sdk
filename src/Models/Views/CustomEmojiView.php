<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\CustomEmoji;
use JGrim\Lemmy\Sdk\Models\Data\CustomEmojiKeyword;

final class CustomEmojiView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(CustomEmoji::class)]
    public CustomEmoji $custom_emoji;
    #[\Sunrise\Hydrator\Annotation\Relationship(CustomEmojiKeyword::class)]
    public array $keywords;
}
