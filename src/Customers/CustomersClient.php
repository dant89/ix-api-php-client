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
    const URL = '/customers';

    /**
     * @param string $id
     * @return Response
     */
    public function deleteCustomer(string $id): Response
    {
        $url = self::URL . '/' . $id;
        return $this->delete($url);
    }

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getCustomers(string $id = null, array $filters = []): Response
    {
        $uri = self::URL;
        if (!is_null($id)) {
            $uri .= '/' . $id;
        }

        return $this->get($uri, $filters);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function patchCustomer(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->patch($url, $data);
    }

    /**
     * @param array $data
     * @return Response
     */
    public function postCustomer(array $data): Response
    {
        return $this->post(self::URL, $data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function putCustomer(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->put($url, $data);
    }
}
