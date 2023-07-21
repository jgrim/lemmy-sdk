<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\CustomEmojiResponse;

final class EditCustomEmoji implements Put
{
    public int $id;
    public string $category;
    public string $image_url;
    public string $alt_text;
    public array $keywords;
    public string $auth;

    public function resourceUrl(): string
    {
        return 'custom_emoji';
    }

    public function responseModel(): string
    {
        return CustomEmojiResponse::class;
    }
}
