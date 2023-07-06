<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Request\ModBan;

final class ModBanView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModBan::class)]
    public ModBan $mod_ban;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public Person $banned_person;
}
