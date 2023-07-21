<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityModeratorView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;
use JGrim\Lemmy\Sdk\Models\Views\PostView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetPostResponse implements Model
{
    public PostView $post_view;
    public CommunityView $community_view;
    #[Relationship(CommunityModeratorView::class)]
    public array $moderators;
    #[Relationship(PostView::class)]
    public array $cross_posts;
}
