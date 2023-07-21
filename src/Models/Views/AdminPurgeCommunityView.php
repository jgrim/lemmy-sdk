<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\AdminPurgeCommunity;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use Sunrise\Hydrator\Annotation\Relationship;

final class AdminPurgeCommunityView implements Model
{
    #[Relationship(AdminPurgeCommunity::class)]
    public AdminPurgeCommunity $admin_purge_community;
    #[Relationship(Person::class)]
    public ?Person $admin = null;
}
