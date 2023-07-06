<?php

namespace JGrim\Lemmy\Sdk\Models\Forms;

use JGrim\Lemmy\Sdk\Contracts\ActionModel\Get;
use JGrim\Lemmy\Sdk\Models\Responses\GetFederatedInstancesResponse;

final class GetFederatedInstances implements Get
{
    public ?string $auth;

    public function resourceUrl(): string
    {
        return '/federated_instances';
    }

    public function responseModel(): string
    {
        return GetFederatedInstancesResponse::class;
    }
}
