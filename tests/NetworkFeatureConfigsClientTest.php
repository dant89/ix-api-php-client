<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\NetworkFeatureConfigs\NetworkFeatureConfigsClient;
use Tests\Helper\ClientTestCase;

class NetworkFeatureConfigsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers NetworkFeatureConfigsClient::get
     */
    public function testGetNetworkFeatureConfigs()
    {
        $client = $this->client->getHttpClient(HttpClientType::NETWORK_FEATURE_CONFIGS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
