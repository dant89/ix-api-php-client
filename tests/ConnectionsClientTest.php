<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ConnectionsClientTest
 * @package Tests
 */
class ConnectionsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetConnections()
    {
        $client = $this->client->getHttpClient('connections');
        $response = $client->getConnections();

        $this->assertEquals(200, $response->getStatus());
    }
}
