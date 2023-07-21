<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Enums\SearchType;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityView;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use JGrim\Lemmy\Sdk\Models\Views\PostView;
use Sunrise\Hydrator\Annotation\Relationship;

final class SearchResponse implements Model
{
    #[Relationship(SearchType::class)]
    public SearchType $type_;
    #[Relationship(CommentView::class)]
    public array $comments;
    #[Relationship(PostView::class)]
    public array $posts;
    #[Relationship(CommunityView::class)]
    public array $communities;
    #[Relationship(PersonView::class)]
    public array $users;
}
