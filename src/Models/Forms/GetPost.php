<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetPostResponse;

final class GetPost implements Get
{
    public ?int $id = null;
    public ?int $comment_id = null;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/post';
    }

    public function responseModel(): string
    {
        return GetPostResponse::class;
    }
}
