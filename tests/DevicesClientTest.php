<?php

namespace Tests;

use Dant89\IXAPIClient\Devices\DevicesClient;
use Dant89\IXAPIClient\HttpClientType;
use Tests\Helper\ClientTestCase;

class DevicesClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers DevicesClient::get
     */
    public function testGetDevices()
    {
        $client = $this->client->getHttpClient(HttpClientType::DEVICES);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
