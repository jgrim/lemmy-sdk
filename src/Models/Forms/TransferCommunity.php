<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Responses\GetCommunityResponse;

final class TransferCommunity implements Post
{
    public int $community_id;
    public int $person_id;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/community/transfer';
    }

    public function responseModel(): string
    {
        return GetCommunityResponse::class;
    }
}
