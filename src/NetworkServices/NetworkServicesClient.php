<?php

namespace Dant89\IXAPIClient\NetworkServices;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class NetworkServicesClient
 * @package Dant89\IXAPIClient\NetworkServices
 */
class NetworkServicesClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkServices(string $id = null, array $filters = []): Response
    {
        $url = '/network-services';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
