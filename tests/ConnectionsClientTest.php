<?php

namespace Tests;

use Dant89\IXAPIClient\Connections\ConnectionsClient;
use Dant89\IXAPIClient\HttpClientType;
use Tests\Helper\ClientTestCase;

class ConnectionsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers ConnectionsClient::get
     */
    public function testGetConnections()
    {
        $client = $this->client->getHttpClient(HttpClientType::CONNECTIONS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
