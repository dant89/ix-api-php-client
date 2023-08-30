<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\NetworkServiceConfigs\NetworkServiceConfigsClient;
use Tests\Helper\ClientTestCase;

class NetworkServiceConfigsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers NetworkServiceConfigsClient::get
     */
    public function testGetNetworkServiceConfigs()
    {
        $client = $this->client->getHttpClient(HttpClientType::NETWORK_SERVICE_CONFIGS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
