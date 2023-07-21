<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\CommentResponse;

final class GetComment implements Get
{
    public int $id;
    public ?string $auth = null;

    public function resourceUrl(): string
    {
        return '/comment';
    }

    public function responseModel(): string
    {
        return CommentResponse::class;
    }
}
