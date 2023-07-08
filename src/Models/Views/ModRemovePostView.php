<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\ModRemovePost;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModRemovePostView implements Model
{
    #[Relationship(ModRemovePost::class)]
    public ?ModRemovePost $mod_review_post = null;
    #[Relationship(Post::class)]
    public ?Post $post = null;
    #[Relationship(Community::class)]
    public ?Community $community = null;
}
