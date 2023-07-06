<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\CommunityAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Enums\SubscribedType;

final class CommunityView implements Model
{
    public Community $community;
    public SubscribedType $subscribed;
    public bool $blocked;
    public CommunityAggregates $counts;
}
