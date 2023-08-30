<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\Pops\PopsClient;
use Tests\Helper\ClientTestCase;

class PopsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers PopsClient::get
     */
    public function testGetPops()
    {
        $client = $this->client->getHttpClient(HttpClientType::POPS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
