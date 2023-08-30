<?php

namespace Tests\Helper;

use Dant89\IXAPIClient\Client;
use Dant89\IXAPIClient\HttpClientType;
use PHPUnit\Framework\TestCase;

class ClientTestCase extends TestCase
{
    protected string $key;
    protected string $secret;
    protected string $url;
    protected Client $client;

    public function setUp(): void
    {
        parent::setUp();
        $this->key = getenv('API_KEY');
        $this->secret = getenv('API_SECRET');
        $this->url = getenv('API_URL');
        $this->client = new Client($this->url);
    }

    public function setBearerToken(): void
    {
        $authClient = $this->client->getHttpClient(HttpClientType::AUTH);
        $response = $authClient->postAuthToken($this->key, $this->secret);
        $responseData = $response->getContent();
        $this->client->setBearerToken($responseData['access_token']);
    }
}
