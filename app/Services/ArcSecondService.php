<?php

namespace App\Services;

use App\Contracts\CosmologyInterface;
use GuzzleHttp\Client as HttpClient;

class ArcSecondService implements CosmologyInterface
{
    protected HttpClient $httpClient;

    public function __construct(
        string $uri,
        protected string $apiKey
    ) {
        $this->httpClient = new HttpClient([
            'base_uri' => $uri,
        ]);
    }
}
