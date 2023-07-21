<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\PersonAggregates;
use JGrim\Lemmy\Sdk\Models\Data\LocalUser;
use JGrim\Lemmy\Sdk\Models\Data\Person;

final class LocalUserView implements Model
{
    public LocalUser $local_user;
    public Person $person;
    public PersonAggregates $counts;
}
