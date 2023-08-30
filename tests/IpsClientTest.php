<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\Ips\IpsClient;
use Tests\Helper\ClientTestCase;

class IpsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers IpsClient::get
     */
    public function testGetIps()
    {
        $client = $this->client->getHttpClient(HttpClientType::IPS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
