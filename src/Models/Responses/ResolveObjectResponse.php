<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use JGrim\Lemmy\Sdk\Models\Views\PostView;

final class ResolveObjectResponse implements Model
{
    public ?CommentView $comment = null;
    public ?PostView $post = null;
    public ?CommunityView $community = null;
    public ?PersonView $person = null;
}
