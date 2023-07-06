<?php

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PersonAggregates implements Model
{
    public int $id;
    public int $personId;
    public int $postCount;
    public int $postScore;
    public int $commentCount;
    public int $commentScore;
}
