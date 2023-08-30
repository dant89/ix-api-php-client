<?php

namespace Tests;

use Dant89\IXAPIClient\Accounts\AccountsClient;
use Dant89\IXAPIClient\HttpClientType;
use Tests\Helper\ClientTestCase;

class AccountsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers AccountsClient::get
     */
    public function testGetAccounts()
    {
        $client = $this->client->getHttpClient(HttpClientType::ACCOUNTS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }
}
