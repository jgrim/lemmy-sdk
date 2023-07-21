<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class CommunityAggregates implements Model
{
    public int $id;
    public int $community_id;
    public int $subscribers;
    public int $posts;
    public int $comments;
    public string $published;
    public int $users_active_day;
    public int $users_active_week;
    public int $users_active_month;
    public int $users_active_half_year;
    public int $hot_rank;
}
