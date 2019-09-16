<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class IpsClientTest
 * @package Tests
 */
class IpsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetIps()
    {
        $client = $this->client->getHttpClient('ips');
        $response = $client->getIps();

        $this->assertEquals(200, $response->getStatus());
    }
}
