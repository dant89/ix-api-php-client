<?php

namespace Tests;

use Dant89\IXAPIClient\Auth\AuthClient;
use Dant89\IXAPIClient\HttpClientType;
use Tests\Helper\ClientTestCase;

class AuthClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @covers AuthClient::postAuthToken
     */
    public function testPostAuth()
    {
        // Authenticate
        $client = $this->client->getHttpClient(HttpClientType::AUTH);
        $response = $client->postAuthToken($this->key, $this->secret);

        $this->assertEquals(200, $response->getStatus());

        $responseData = $response->getContent();
        $this->assertArrayHasKey('access_token', $responseData);
    }
}
