<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\ModBanFromCommunity;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModBanFromCommunityView implements Model
{
    #[Relationship(ModBanFromCommunity::class)]
    public ModBanFromCommunity $mod_ban_from_community;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Community::class)]
    public Community $community;
    #[Relationship(Person::class)]
    public Person $banned_person;
}
