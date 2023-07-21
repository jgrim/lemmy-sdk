<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\AdminPurgePerson;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use Sunrise\Hydrator\Annotation\Relationship;

final class AdminPurgePersonView implements Model
{
    #[Relationship(AdminPurgePerson::class)]
    public AdminPurgePerson $admin_purge_person;
    #[Relationship(Person::class)]
    public ?Person $admin = null;
}
