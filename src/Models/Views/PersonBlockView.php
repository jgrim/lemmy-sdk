<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;

final class PersonBlockView implements Model
{
    public Person $person;
    public Person $target;
}
