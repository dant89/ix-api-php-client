<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\Macs\MacsClient;
use Tests\Helper\ClientTestCase;

class MacsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers MacsClient::get
     */
    public function testGetMacs()
    {
        $client = $this->client->getHttpClient(HttpClientType::MACS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
