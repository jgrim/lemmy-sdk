<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Comment;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\ModRemoveComment;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModRemoveCommentView implements Model
{
    #[Relationship(ModRemoveComment::class)]
    public ModRemoveComment $mod_remove_comment;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Comment::class)]
    public Comment $comment;
    #[Relationship(Person::class)]
    public Person $commenter;
    #[Relationship(Post::class)]
    public Post $post;
    #[Relationship(Community::class)]
    public Community $community;
}
