<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\NetworkFeatures\NetworkFeaturesClient;
use Tests\Helper\ClientTestCase;

class NetworkFeaturesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers NetworkFeaturesClient::get
     */
    public function testGetNetworkFeatures()
    {
        $client = $this->client->getHttpClient(HttpClientType::NETWORK_FEATURES);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
