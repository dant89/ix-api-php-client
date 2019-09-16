<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class AuthClientTest
 * @package Tests
 */
class AuthClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPostAuth()
    {
        // Authenticate
        $client = $this->client->getHttpClient('auth');
        $response = $client->postAuthToken($this->key, $this->secret);

        $this->assertEquals(200, $response->getStatus());

        $responseData = $response->getContent();
        $this->assertArrayHasKey('access_token', $responseData);
    }
}
