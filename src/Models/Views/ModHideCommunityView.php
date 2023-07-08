<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\ModHideCommunity;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModHideCommunityView implements Model
{
    #[Relationship(ModHideCommunity::class)]
    public ModHideCommunity $mod_hide_community;
    #[Relationship(Person::class)]
    public ?Person $admin = null;
    #[Relationship(Community::class)]
    public Community $community;
}
