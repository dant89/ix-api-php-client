<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\NetworkServices\NetworkServicesClient;
use Tests\Helper\ClientTestCase;

class NetworkServicesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers NetworkServicesClient::get
     */
    public function testGetNetworkServices()
    {
        $client = $this->client->getHttpClient(HttpClientType::NETWORK_SERVICES);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
