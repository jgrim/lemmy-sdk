<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\ModBanFromCommunity;

final class ModBanFromCommunityView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModBanFromCommunity::class)]
    public ModBanFromCommunity $mod_ban_from_community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public Person $banned_person;
}
