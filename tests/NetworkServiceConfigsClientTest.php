<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class NetworkServiceConfigsClientTest
 * @package Tests
 */
class NetworkServiceConfigsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetNetworkServiceConfigs()
    {
        $client = $this->client->getHttpClient('network-service-configs');
        $response = $client->getNetworkServiceConfigs();

        $this->assertEquals(200, $response->getStatus());
    }
}
