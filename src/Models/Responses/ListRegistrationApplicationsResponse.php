<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\RegistrationApplicationView;
use Sunrise\Hydrator\Annotation\Relationship;

final class ListRegistrationApplicationsResponse implements Model
{
    #[Relationship(RegistrationApplicationView::class)]
    public array $registration_applications;
}
