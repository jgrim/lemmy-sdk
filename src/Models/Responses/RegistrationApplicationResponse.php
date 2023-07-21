<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Views\RegistrationApplicationView;

final class RegistrationApplicationResponse implements Model
{
    public RegistrationApplicationView $registration_application;
}
