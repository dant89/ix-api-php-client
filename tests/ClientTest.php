<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ClientTest
 * @package Tests
 */
class ClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testClient()
    {
        $this->assertEquals($this->client->getBaseUrl(), $this->url);
    }
}
