<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\AdminPurgeCommentView;
use JGrim\Lemmy\Sdk\Models\Views\AdminPurgeCommunityView;
use JGrim\Lemmy\Sdk\Models\Views\AdminPurgePersonView;
use JGrim\Lemmy\Sdk\Models\Views\AdminPurgePostView;
use JGrim\Lemmy\Sdk\Models\Views\ModAddCommunityView;
use JGrim\Lemmy\Sdk\Models\Views\ModAddView;
use JGrim\Lemmy\Sdk\Models\Views\ModBanFromCommunityView;
use JGrim\Lemmy\Sdk\Models\Views\ModBanView;
use JGrim\Lemmy\Sdk\Models\Views\ModFeaturePostView;
use JGrim\Lemmy\Sdk\Models\Views\ModHideCommunityView;
use JGrim\Lemmy\Sdk\Models\Views\ModLockPostView;
use JGrim\Lemmy\Sdk\Models\Views\ModRemoveCommentView;
use JGrim\Lemmy\Sdk\Models\Views\ModRemoveCommunityView;
use JGrim\Lemmy\Sdk\Models\Views\ModRemovePostView;
use JGrim\Lemmy\Sdk\Models\Views\ModTransferCommunityView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetModlogResponse implements Model
{
    #[Relationship(ModRemovePostView::class)]
    public array $removed_posts;
    #[Relationship(ModLockPostView::class)]
    public array $locked_posts;
    #[Relationship(ModFeaturePostView::class)]
    public array $featured_posts;
    #[Relationship(ModRemoveCommentView::class)]
    public array $removed_comments;
    #[Relationship(ModRemoveCommunityView::class)]
    public array $removed_communities;
    #[Relationship(ModBanFromCommunityView::class)]
    public array $banned_from_community;
    #[Relationship(ModBanView::class)]
    public array $banned;
    #[Relationship(ModAddCommunityView::class)]
    public array $added_to_community;
    #[Relationship(ModTransferCommunityView::class)]
    public array $transferred_to_community;
    #[Relationship(ModAddView::class)]
    public array $added;
    #[Relationship(AdminPurgePersonView::class)]
    public array $admin_purged_persons;
    #[Relationship(AdminPurgeCommunityView::class)]
    public array $admin_purged_communities;
    #[Relationship(AdminPurgePostView::class)]
    public array $admin_purged_posts;
    #[Relationship(AdminPurgeCommentView::class)]
    public array $admin_purged_comments;
    #[Relationship(ModHideCommunityView::class)]
    public array $hidden_communities;
}
