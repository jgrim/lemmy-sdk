<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class GetUnreadRegistrationApplicationCountResponse implements Model
{
    public int $registration_applications;
}
