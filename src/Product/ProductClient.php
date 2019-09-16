<?php

namespace Dant89\IXAPIClient\Product;

use Dant89\IXAPIClient\AbstractHttpClient;

/**
 * Class ProductClient
 * @package Dant89\IXAPIClient\Product
 */
class ProductClient extends AbstractHttpClient
{
    public function getProducts(string $id = null)
    {
        $url = '/products';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url);
    }
}
