<?php

use JGrim\Lemmy\Sdk\Client;
use JGrim\Lemmy\Sdk\Hydrator;
use JGrim\Lemmy\Sdk\Models\Forms\GetModLog;
use JGrim\Lemmy\Sdk\Models\Forms\GetPersonDetails;
use JGrim\Lemmy\Sdk\Models\Forms\Login;
use JGrim\Lemmy\Sdk\Models\Responses\GetModlogResponse;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

include_once '../../vendor/autoload.php';

$client = Client::create(
    'https://discuss.online'
);


$response = $client->processForm(
    Hydrator::hydrate(\JGrim\Lemmy\Sdk\Models\Forms\GetSiteMetadata::class, ['url' => 'https://google.com'])
);

/** @var GetModlogResponse $auth */


/** @var LoginResponse $auth */
$auth = $client->processForm(
    Hydrator::hydrate(Login::class, [
        'username_or_email' => 'ApiTesting',
        'password' => 'ANH0fmx_fut8jpt_ezf'
    ])
);

$response = $client->processForm(
    Hydrator::hydrate(GetPersonDetails::class, [
        'person_id' => 2,
        'auth' => $auth->jwt
    ])
);

$response;

