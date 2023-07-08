<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Data;

// @todo
use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Views\CommunityBlockView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityFollowerView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityModeratorView;
use JGrim\Lemmy\Sdk\Models\Views\LocalUserView;
use JGrim\Lemmy\Sdk\Models\Views\PersonBlockView;
use Sunrise\Hydrator\Annotation\Relationship;

final class MyUserInfo implements Model
{
    public LocalUserView $local_user_view;
    #[Relationship(CommunityFollowerView::class)]
    public array $follows;
    #[Relationship(CommunityModeratorView::class)]
    public array $moderates;
    #[Relationship(CommunityBlockView::class)]
    public array $community_blocks;
    #[Relationship(PersonBlockView::class)]
    public array $person_blocks;
    public array $discussion_languages;
}
