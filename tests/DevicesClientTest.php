<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class DevicesClientTest
 * @package Tests
 */
class DevicesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetDevices()
    {
        $client = $this->client->getHttpClient('devices');
        $response = $client->getDevices();

        $this->assertEquals(200, $response->getStatus());
    }
}
