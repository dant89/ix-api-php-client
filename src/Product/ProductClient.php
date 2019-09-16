<?php

namespace Dant89\IXAPIClient\Product;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class ProductClient
 * @package Dant89\IXAPIClient\Product
 */
class ProductClient extends AbstractHttpClient
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
