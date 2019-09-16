<?php

namespace Dant89\IXAPIClient\Products;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class ProductsClient
 * @package Dant89\IXAPIClient\Products
 */
class ProductsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getProducts(string $id = null, array $filters = []): Response
    {
        $url = '/products';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
