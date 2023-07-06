<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;
use JGrim\Lemmy\Sdk\Models\Views\CommunityModeratorView;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use JGrim\Lemmy\Sdk\Models\Views\PostView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetPersonDetailsResponse implements Model
{
    public PersonView $person_view;
    #[Relationship(CommentView::class)]
    public ?array $comments = null;
    #[Relationship(PostView::class)]
    public ?array $posts = null;
    #[Relationship(CommunityModeratorView::class)]
    public ?array $moderates = null;

}
