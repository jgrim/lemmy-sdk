<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\ModAdd;
use JGrim\Lemmy\Sdk\Models\Data\Person;

final class ModAddView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModAdd::class)]
    public ModAdd $mod_add;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public Person $modded_person;
}
