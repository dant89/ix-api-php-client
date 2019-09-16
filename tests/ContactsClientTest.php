<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ContactsClientTest
 * @package Tests
 */
class ContactsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetContacts()
    {
        $client = $this->client->getHttpClient('contacts');
        $response = $client->getContacts();

        $this->assertEquals(200, $response->getStatus());
    }
}
