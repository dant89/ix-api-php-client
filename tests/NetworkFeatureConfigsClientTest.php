<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class NetworkFeatureConfigsClientTest
 * @package Tests
 */
class NetworkFeatureConfigsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetNetworkFeatureConfigs()
    {
        $client = $this->client->getHttpClient('network-feature-configs');
        $response = $client->getNetworkFeatureConfigs();

        $this->assertEquals(200, $response->getStatus());
    }
}
