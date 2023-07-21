<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityModeratorView;
use Sunrise\Hydrator\Annotation\Relationship;

final class AddModToCommunityResponse implements Model
{
    #[Relationship(CommunityModeratorView::class)]
    public array $moderators;
}
