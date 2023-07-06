<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;

final class CommunityFollowerView implements Model
{
    public Community $community;
    public Person $follower;
}
