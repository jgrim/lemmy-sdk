<?php

use JGrim\Lemmy\Sdk\Client;
use JGrim\Lemmy\Sdk\Hydrator;
use JGrim\Lemmy\Sdk\Models\Forms\GetModLog;
use JGrim\Lemmy\Sdk\Models\Forms\GetPersonDetails;
use JGrim\Lemmy\Sdk\Models\Responses\GetModlogResponse;

include_once '../../vendor/autoload.php';

$client = Client::create(
    'https://discuss.online'
);

/** @var GetModlogResponse $auth */
$response = $client->processForm(
    Hydrator::hydrate(GetModLog::class, [
        'other_person_id' => 2
    ])
);

$response = $client->processForm(
    Hydrator::hydrate(GetPersonDetails::class, [
        'person_id' => 2
    ])
);

$response;

