<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Request\AdminPurgeCommunity;

final class AdminPurgeCommunityView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(AdminPurgeCommunity::class)]
    public AdminPurgeCommunity $admin_purge_community;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $admin = null;
}
