<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;

final class BanFromCommunityResponse implements Model
{
    public PersonView $person_view;
    public bool $banned;
}