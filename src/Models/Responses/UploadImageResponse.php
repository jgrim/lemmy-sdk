<?php

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel;
use JGrim\Lemmy\Sdk\Models\Data\Image;
use Sunrise\Hydrator\Annotation\Relationship;

class UploadImageResponse implements ResponseModel
{
    public ?string $msg = null;
    public ?string $error = null;
    #[Relationship(Image::class)]
    public ?array $files = null;
}
