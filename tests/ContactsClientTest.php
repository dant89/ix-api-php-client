<?php

namespace Tests;

use Dant89\IXAPIClient\Contacts\ContactsClient;
use Dant89\IXAPIClient\HttpClientType;
use Tests\Helper\ClientTestCase;

class ContactsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers ContactsClient::get
     */
    public function testGetContacts()
    {
        $client = $this->client->getHttpClient(HttpClientType::CONTACTS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
