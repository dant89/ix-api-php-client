<?php

namespace Tests;

use Dant89\IXAPIClient\HttpClientType;
use Dant89\IXAPIClient\ProductOfferings\ProductOfferingsClient;
use Tests\Helper\ClientTestCase;

class ProductOfferingsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @covers ProductOfferingsClient::get
     */
    public function testGetProducts()
    {
        $client = $this->client->getHttpClient(HttpClientType::PRODUCT_OFFERINGS);
        $response = $client->get();

        $this->assertEquals(200, $response->getStatus());
    }

    /**
     * @covers ProductOfferingsClient::get
     */
    public function testGetProductsFilter()
    {
        $client = $this->client->getHttpClient(HttpClientType::PRODUCT_OFFERINGS);
        $response = $client->get(null, [
            'type' => 'exchange_lan'
        ]);

        $this->assertEquals(200, $response->getStatus());
    }
}
