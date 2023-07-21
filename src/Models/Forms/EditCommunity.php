<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\CommunityResponse;

final class EditCommunity implements Put
{
    public int $community_id;
    public ?string $title = null;
    public ?string $description = null;
    public ?string $icon = null;
    public ?string $banner = null;
    public ?bool $nsfw = null;
    public ?bool $posting_restricted_to_mods = null;
    public ?array $discussion_languages = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return 'community';
    }

    public function responseModel(): string
    {
        return CommunityResponse::class;
    }
}
