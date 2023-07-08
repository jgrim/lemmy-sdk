<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\ModLockPost;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModLockPostView implements Model
{
    #[Relationship(ModLockPost::class)]
    public ModLockPost $mod_lock_post;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Post::class)]
    public ?Post $post = null;
    #[Relationship(Community::class)]
    public ?Community $community = null;
}
