<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;

final class BlockCommunityResponse implements Model
{
    public CommunityView $community_view;
    public bool $blocked;
}
