<?php

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

final class SiteAggregates
{
    public int $id;
    public int $site_id;
    public int $users;
    public int $posts;
    public int $comments;
    public int $communities;
    public int $users_active_day;
    public int $users_active_week;
    public int $users_active_month;
    public int $users_active_half_year;
}
