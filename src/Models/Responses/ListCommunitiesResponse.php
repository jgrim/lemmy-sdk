<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;
use Sunrise\Hydrator\Annotation\Relationship;

final class ListCommunitiesResponse implements Model
{
    #[Relationship(CommunityView::class)]
    public array $communities;
}
