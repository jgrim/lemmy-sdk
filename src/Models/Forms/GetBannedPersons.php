<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\BannedPersonsResponse;

final class GetBannedPersons implements Get
{
    public string $auth;

    public function resourceUrl(): string
    {
        return '/user/banned';
    }

    public function responseModel(): string
    {
        return BannedPersonsResponse::class;
    }
}
