<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Image implements Model
{
    public string $file;
    public string $delete_token;
}
