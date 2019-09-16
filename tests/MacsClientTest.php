<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class MacsClientTest
 * @package Tests
 */
class MacsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetMacs()
    {
        $client = $this->client->getHttpClient('macs');
        $response = $client->getMacs();

        $this->assertEquals(200, $response->getStatus());
    }
}
