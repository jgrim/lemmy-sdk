<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Request\ModTransferCommunity;

final class ModTransferCommunityView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModTransferCommunity::class)]
    public ModTransferCommunity $mod_transfer_community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public Person $modded_person;
}
