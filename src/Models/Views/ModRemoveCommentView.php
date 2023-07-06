<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Comment;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Request\ModRemoveComment;

final class ModRemoveCommentView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModRemoveComment::class)]
    public ModRemoveComment $mod_remove_comment;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Comment::class)]
    public Comment $comment;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public Person $commenter;
    #[\Sunrise\Hydrator\Annotation\Relationship(Post::class)]
    public Post $post;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
}
