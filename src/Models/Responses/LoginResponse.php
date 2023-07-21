<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class LoginResponse implements Model
{
    public ?string $jwt = null;
    public bool $registration_created;
    public bool $verify_email_sent;
}
