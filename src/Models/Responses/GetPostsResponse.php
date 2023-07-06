<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PostView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetPostsResponse implements Model
{
    #[Relationship(PostView::class)]
    public array $posts;
}
