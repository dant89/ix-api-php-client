<?php

namespace Dant89\IXAPIClient;

class Client
{
    const API_VERSION = 'v2';
    private string $baseUrl;
    private ?string $bearerToken = null;

    public function __construct(string $exchangeUrl)
    {
        $this->baseUrl = $exchangeUrl;
    }

    public function getApiVersion(): string
    {
        return self::API_VERSION;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getBearerToken(): ?string
    {
        return $this->bearerToken;
    }

    public function setBearerToken(string $bearerToken): Client
    {
        $this->bearerToken = $bearerToken;
        return $this;
    }

    public function getHttpClient(HttpClientType $clientType): AbstractHttpClient {
        return new $clientType->value($this);
    }
}
