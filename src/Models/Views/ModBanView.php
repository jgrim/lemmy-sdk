<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\ModBan;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModBanView implements Model
{
    #[Relationship(ModBan::class)]
    public ModBan $mod_ban;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Person::class)]
    public Person $banned_person;
}
