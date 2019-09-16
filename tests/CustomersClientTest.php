<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class CustomersClientTest
 * @package Tests
 */
class CustomersClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetCustomers()
    {
        $client = $this->client->getHttpClient('customers');
        $response = $client->getCustomers();

        $this->assertEquals(200, $response->getStatus());
    }
}
