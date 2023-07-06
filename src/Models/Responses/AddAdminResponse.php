<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\PersonView;
use Sunrise\Hydrator\Annotation\Relationship;

final class AddAdminResponse implements Model
{
    #[Relationship(PersonView::class)]
    public array $admins;
}
