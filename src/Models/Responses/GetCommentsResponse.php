<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\CommentView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetCommentsResponse implements Model
{
    #[Relationship(CommentView::class)]
    public array $comments;
}
