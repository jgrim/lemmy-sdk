<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Responses;

use JGrim\Lemmy\Sdk\Contracts\ResponseModel as Model;
use JGrim\Lemmy\Sdk\Models\Data\FederatedInstances;
use Sunrise\Hydrator\Annotation\Relationship;

final class GetFederatedInstancesResponse implements Model
{
    #[Relationship(FederatedInstances::class)]
    public ?FederatedInstances $federated_instances = null;
}
