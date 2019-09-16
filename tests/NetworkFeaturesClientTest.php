<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class NetworkFeaturesClientTest
 * @package Tests
 */
class NetworkFeaturesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetNetworkFeatures()
    {
        $client = $this->client->getHttpClient('network-features');
        $response = $client->getNetworkFeatures();

        $this->assertEquals(200, $response->getStatus());
    }
}
