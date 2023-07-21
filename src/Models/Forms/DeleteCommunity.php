<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\CommunityResponse;

final class DeleteCommunity implements Post
{
    public int $community_id;
    public bool $deleted;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/delete';
    }

    public function responseModel(): string
    {
        return CommunityResponse::class;
    }
}
