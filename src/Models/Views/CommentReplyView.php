<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\CommentAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Comment;
use JGrim\Lemmy\Sdk\Models\Data\CommentReply;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;

final class CommentReplyView implements Model
{
    public CommentReply $comment_reply;
    public Comment $comment;
    public Person $creator;
    public Post $post;
    public Community $community;
    public Person $recipient;
    public CommentAggregates $counts;
    public bool $creator_banned_from_community;
    public bool $subscribed;
    public bool $saved;
    public bool $creator_blocked;
    public ?int $my_vote = null;
}
