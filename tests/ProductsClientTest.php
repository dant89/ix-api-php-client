<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ProductsClientTest
 * @package Tests
 */
class ProductsClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    public function testGetProducts()
    {
        $client = $this->client->getHttpClient('products');
        $response = $client->getProducts();

        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetProductsFilter()
    {
        $client = $this->client->getHttpClient('products');
        $response = $client->getProducts(null, [
            'type' => 'exchange_lan'
        ]);

        $this->assertEquals(200, $response->getStatus());
    }
}
