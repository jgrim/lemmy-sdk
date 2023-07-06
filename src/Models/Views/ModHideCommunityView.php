<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\ModHideCommunity;

final class ModHideCommunityView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModHideCommunity::class)]
    public ModHideCommunity $mod_hide_community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $admin = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
}
