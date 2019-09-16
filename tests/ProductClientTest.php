<?php

namespace Tests;

use Tests\Helper\ClientTestCase;

/**
 * Class ProductClientTest
 * @package Tests
 */
class ProductClientTest extends ClientTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setBearerToken();
    }

    /**
     * @throws \Exception
     * @group needs-config
     */
    public function testGetProducts()
    {
        $productClient = $this->client->getHttpClient('product');
        $response = $productClient->getProducts();

        $this->assertEquals(200, $response->getStatus());
    }
}
