<?php
declare(strict_types=1);
include_once '../../vendor/autoload.php';

use JGrim\Lemmy\Sdk\Client;
use JGrim\Lemmy\Sdk\Hydrator;
use JGrim\Lemmy\Sdk\Models\Forms\Login;
use JGrim\Lemmy\Sdk\Models\Responses\LoginResponse;

$client = Client::create(
    'http://localhost'
);

/** @var LoginResponse $auth */
$auth = $client->processForm(
    Hydrator::hydrate(Login::class, [
        'username_or_email' => 'ApiTesting',
        'password' => 'ANH0fmx_fut8jpt_ezf'
    ])
);

$authToken = $auth->jwt;

$file = new SplTempFileObject();
$file->fwrite(file_get_contents('IMG_5597.jpg'));
$file->rewind();

$response = $client->upload(
    $authToken,
    $file
);
