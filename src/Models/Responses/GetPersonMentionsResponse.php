<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PersonMentionView;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetPersonMentionsResponse implements Model
{
    #[Relationship(PersonMentionView::class)]
    public array $mentions;
}
