<?php

namespace Dant89\IXAPIClient\Ips;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class IpsClient
 * @package Dant89\IXAPIClient\Ips
 */
class IpsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getIps(string $id = null, array $filters = []): Response
    {
        $url = '/ips';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
