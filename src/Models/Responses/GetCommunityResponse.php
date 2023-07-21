<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\Site;
use JGrim\Lemmy\Sdk\Models\Views\CommunityModeratorView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetCommunityResponse implements Model
{
    public CommunityView $community_view;
    public ?Site $site = null;
    #[Relationship(CommunityModeratorView::class)]
    public array $moderators;
    public array $discussion_languages;
}
