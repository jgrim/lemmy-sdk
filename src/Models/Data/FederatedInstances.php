<?php

namespace JGrim\Lemmy\Sdk\Models\Data;

use JGrim\Lemmy\Sdk\Contracts\Model;
use Sunrise\Hydrator\Annotation\Relationship;

final class FederatedInstances implements Model
{
    #[Relationship(Instance::class)]
    public array $linked;
    #[Relationship(Instance::class)]
    public array $allowed;
    #[Relationship(Instance::class)]
    public array $blocked;
}
