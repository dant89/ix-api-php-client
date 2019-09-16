<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class DemarcsClientTest
 * @package Tests
 */
class DemarcsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetDemarcs()
    {
        $client = $this->client->getHttpClient('demarcs');
        $response = $client->getDemarcs();

        $this->assertEquals(200, $response->getStatus());
    }
}
