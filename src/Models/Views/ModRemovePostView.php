<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Request\ModRemovePost;

final class ModRemovePostView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModRemovePost::class)]
    public ?ModRemovePost $mod_review_post = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Post::class)]
    public ?Post $post = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public ?Community $community = null;
}
