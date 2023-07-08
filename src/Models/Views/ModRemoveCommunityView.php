<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\ModRemoveCommunity;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModRemoveCommunityView implements Model
{
    #[Relationship(ModRemoveCommunity::class)]
    public ModRemoveCommunity $mod_remove_community;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Community::class)]
    public Community $community;
}
