<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\AdminPurgeComment;

final class AdminPurgeCommentView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(AdminPurgeComment::class)]
    public AdminPurgeComment $admin_purge_comment;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $admin = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Post::class)]
    public Post $post;
}
