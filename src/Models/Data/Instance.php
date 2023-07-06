<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class Instance implements Model
{
    public string $id;
    public string $domain;
    public string $published;
    public ?string $updated = null;
    public ?string $software = null;
    public ?string $version = null;
}
