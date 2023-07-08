<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\FederatedInstances;

final class GetFederatedInstancesResponse implements Model
{
    public ?FederatedInstances $federated_instances = null;
}
