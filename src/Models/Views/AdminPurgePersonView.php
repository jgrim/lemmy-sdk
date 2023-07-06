<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\AdminPurgePerson;

final class AdminPurgePersonView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(AdminPurgePerson::class)]
    public AdminPurgePerson $admin_purge_person;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $admin = null;
}
