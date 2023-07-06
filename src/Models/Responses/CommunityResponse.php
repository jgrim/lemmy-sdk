<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;

final class CommunityResponse implements Model
{
    public CommunityView $community_view;
    public array $discussion_languages;
}
