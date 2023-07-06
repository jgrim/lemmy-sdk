<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Models\Enums\PostFeatureType;
use JGrim\Lemmy\Sdk\Models\Responses\PostResponse;

final class FeaturePost implements Post
{
    public int $post_id;
    public bool $featured;
    public PostFeatureType $feature_type;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/post/feature';
    }

    public function responseModel(): string
    {
        return PostResponse::class;
    }
}
