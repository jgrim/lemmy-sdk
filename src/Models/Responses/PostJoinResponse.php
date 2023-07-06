<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;

final class PostJoinResponse implements Model
{
    public bool $joined;
}
