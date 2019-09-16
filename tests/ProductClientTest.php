<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ProductClientTest
 * @package Tests
 */
class ProductClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @throws \Exception
     * @group needs-config
     */
    public function testPostAuth()
    {
        // Authenticate
        $authClient = $this->client->getHttpClient('auth');
        $response = $authClient->postAuthToken($this->key, $this->secret);

        $this->assertEquals(200, $response->getStatus());

        $responseData = $response->getContent();
        $this->assertArrayHasKey('access_token', $responseData);
    }
}
