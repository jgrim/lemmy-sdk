<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\ModRemovePost;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModRemovePostView implements Model
{
    #[Relationship(ModRemovePost::class)]
    public ?ModRemovePost $mod_remove_post = null;
    #[Relationship(Post::class)]
    public ?Post $post = null;
    #[Relationship(Community::class)]
    public ?Community $community = null;
}
