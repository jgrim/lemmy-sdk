<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class GetCaptchaResponse implements Model
{
    public ?CaptchaResponse $ok = null;
}
