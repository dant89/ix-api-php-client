<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class NetworkServicesClientTest
 * @package Tests
 */
class NetworkServicesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetNetworkServices()
    {
        $client = $this->client->getHttpClient('network-services');
        $response = $client->getNetworkServices();

        $this->assertEquals(200, $response->getStatus());
    }
}
