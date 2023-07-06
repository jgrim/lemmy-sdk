<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\PersonAggregates;

final class LocalUserView implements Model
{
    public LocalUser $local_user;
    public Person $person;
    public PersonAggregates $counts;
}
