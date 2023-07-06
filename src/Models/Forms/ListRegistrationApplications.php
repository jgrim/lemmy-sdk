<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\ListRegistrationApplicationsResponse;

final class ListRegistrationApplications implements Get
{
    public ?bool $unread_only;
    public ?int $page = null;
    public ?int $limit = null;
    public string $auth;

    public function resourceUrl(): string
    {
        return '/admin/registration_application/list';
    }

    public function responseModel(): string
    {
        return ListRegistrationApplicationsResponse::class;
    }
}
