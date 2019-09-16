<?php

namespace Dant89\IXAPIClient\NetworkServiceConfigs;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class NetworkServiceConfigsClient
 * @package Dant89\IXAPIClient\NetworkServiceConfigs
 */
class NetworkServiceConfigsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkServiceConfigs(string $id = null, array $filters = []): Response
    {
        $url = '/network-service-configs';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
