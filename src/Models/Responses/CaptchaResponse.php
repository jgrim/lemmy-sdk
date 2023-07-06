<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class CaptchaResponse implements Model
{
    public string $png;
    public string $wav;
    public string $uuid;
}
