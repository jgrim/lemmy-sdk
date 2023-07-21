<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\BlockCommunityResponse;

final class BlockCommunity implements Post
{

    public function resourceUrl(): string
    {
        return '/community/block';
    }

    public function responseModel(): string
    {
        return BlockCommunityResponse::class;
    }
}
