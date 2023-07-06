<?php

namespace JGrim\Lemmy\Sdk\Contracts;

interface ActionModel extends Model
{
    public function resourceUrl(): string;

    public function responseModel(): string;
}
