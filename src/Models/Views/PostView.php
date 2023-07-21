<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\PostAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Enums\SubscribedType;

final class PostView implements Model
{
    public Post $post;
    public Person $creator;
    public Community $community;
    public bool $creator_banned_from_community;
    public PostAggregates $counts;
    public SubscribedType $subscribed;
    public bool $saved;
    public bool $read;
    public bool $creator_blocked;
    public ?int $my_vote = null;
    public int $unread_comments;
}
