<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\PersonAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Person;

final class PersonView implements Model
{
    public Person $person;
    public ?PersonAggregates $personAggregates = null;
}
