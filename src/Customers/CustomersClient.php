<?php

namespace Dant89\IXAPIClient\Customers;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class CustomersClient
 * @package Dant89\IXAPIClient\Customers
 */
class CustomersClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getCustomers(string $id = null, array $filters = []): Response
    {
        $url = '/customers';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
