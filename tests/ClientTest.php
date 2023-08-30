<?php

namespace Tests;

use Dant89\IXAPIClient\Client;
use Tests\Helper\ClientTestCase;

class ClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @covers Client::getBaseUrl
     */
    public function testClient()
    {
        $this->assertEquals($this->client->getBaseUrl(), $this->url);
    }
}
