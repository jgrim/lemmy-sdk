<?php

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PostAggregates implements Model
{
    public int $id;
    public int $post_id;
    public int $comments;
    public int $score;
    public int $upvotes;
    public int $downvotes;
    public string $published;
    public string $newest_comment_time_necro;
    public string $newest_comment_time;
    public bool $featured_community;
    public bool $featured_local;
    public int $hot_rank;
    public int $hot_rank_active;
}
