<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class PopsClientTest
 * @package Tests
 */
class PopsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetPops()
    {
        $client = $this->client->getHttpClient('pops');
        $response = $client->getPops();

        $this->assertEquals(200, $response->getStatus());
    }
}
