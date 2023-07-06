<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Models\Responses\RegistrationApplicationResponse;

final class ApproveRegistrationApplication implements Put
{

    public function resourceUrl(): string
    {
        return '/admin/registration_application/approve';
    }

    public function responseModel(): string
    {
        return RegistrationApplicationResponse::class;
    }
}
