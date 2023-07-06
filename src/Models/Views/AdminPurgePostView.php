<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Request\AdminPurgePost;

final class AdminPurgePostView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(AdminPurgePost::class)]
    public AdminPurgePost $admin_purge_post;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $admin = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
}
