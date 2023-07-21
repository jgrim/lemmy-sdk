<?php
declare(strict_types=1);

use JGrim\Lemmy\Sdk\Client;
use JGrim\Lemmy\Sdk\Models\Forms\GetModLog;
use JGrim\Lemmy\Sdk\Models\Responses\GetModlogResponse;

include_once '../../vendor/autoload.php';

$client = Client::create(
    'https://discuss.online'
);

/** @var GetModlogResponse $response */
$response = $client->processForm(
    new GetModLog()
);

$response;

