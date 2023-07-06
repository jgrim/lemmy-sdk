<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\CommentAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Comment;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\PersonMention;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Enums\SubscribedType;

final class PersonMentionView implements Model
{
    public PersonMention $person_mention;
    public Comment $comment;
    public Person $creator;
    public Post $post;
    public Community $community;
    public Person $recipient;
    public CommentAggregates $counts;
    public bool $creator_banned_from_community;
    public SubscribedType $subscribed;
    public bool $saved;
    public bool $creator_blocked;
    public ?int $my_vote = null;
}
