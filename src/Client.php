<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use JGrim\Lemmy\Sdk\Contracts\ActionModel\Post;
use JGrim\Lemmy\Sdk\Contracts\ActionModel\Put;
use JGrim\Lemmy\Sdk\Contracts\ResponseModel;
use JGrim\Lemmy\Sdk\Exceptions\RequestExceptionHandler;
use JGrim\Lemmy\Sdk\Models\Responses\UploadImageResponse;
use Psr\Http\Client\RequestExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use SplFileObject;

final readonly class Client
{
    private const API_VERSION = 'v3';

    public function __construct(public GuzzleClient $client)
    {
    }

    public static function create(string $uri): self
    {
        return new self(new GuzzleClient([
            'base_uri' => $uri,
            'timeout' => 2.0,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]));
    }

    public function upload(
        string        $jwt,
        SplFileObject $imageData,
        string        $filename = 'image.jpg'
    ): UploadImageResponse
    {
        try {
            $headers = [];
            if ($imageData->isFile()) {
                $mimeType = mime_content_type($imageData->getRealPath());
                $headers = ['Content-Type' => $mimeType];
            }
            $response = $this->client->request('POST', '/pictrs/image', [
                'timeout' => 0,
                'cookies' => CookieJar::fromArray(
                    ['jwt' => $jwt,],
                    parse_url($this->client->getConfig('base_uri'), PHP_URL_HOST)
                ),
                'multipart' => [
                    [
                        'name' => 'images[]',
                        'headers' => $headers,
                        'filename' => $filename,
                        'contents' => $imageData
                    ]
                ]
            ]);
            return Hydrator::hydrate(UploadImageResponse::class, $response->getBody());
        } catch (\Exception $exception) {
            // @todo handle this
            throw $exception;
        }
    }

    private function request(string $responseModel, Request $request, array $options = []): ResponseModel
    {
        return $this->client->sendAsync($request, $options)
            ->then(static function (ResponseInterface $response) use ($responseModel): ResponseModel {
                return Hydrator::hydrate($responseModel, $response->getBody());
            }, static function (RequestExceptionInterface $response): void {
                RequestExceptionHandler::handle($response);
            })->wait();
    }

    public function processForm(Contracts\ActionModel $action): ResponseModel
    {
        try {
            $params = Extractor::extract($action);
            $resourceUri = sprintf(
                '/api/%s/%s',
                self::API_VERSION, trim($action->resourceUrl(), '/')
            );
            return match (true) {
                $action instanceof Post => $this->request(
                    $action->responseModel(),
                    new Request(
                        'POST',
                        $resourceUri,
                        [],
                        json_encode($params, JSON_THROW_ON_ERROR)
                    )
                ),
                $action instanceof Put => $this->request(
                    $action->responseModel(),
                    new Request(
                        'PUT',
                        $resourceUri,
                        [],
                        json_encode($params, JSON_THROW_ON_ERROR)
                    )
                ),
                default => $this->request(
                    $action->responseModel(),
                    new Request(
                        'GET',
                        $resourceUri
                    ),
                    [RequestOptions::QUERY => array_filter(
                        $params, static fn($value) => $value !== null
                    )]
                ),
            };
        } catch (\JsonException $jsonException) {
            // @todo do something about it
            throw $jsonException;
        }
    }
}
