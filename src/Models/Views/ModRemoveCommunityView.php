<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Request\ModRemoveCommunity;

final class ModRemoveCommunityView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModRemoveCommunity::class)]
    public ModRemoveCommunity $mod_remove_community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
}
