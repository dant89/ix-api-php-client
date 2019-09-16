<?php

namespace Dant89\IXAPIClient\NetworkFeatureConfigs;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class NetworkFeatureConfigsClient
 * @package Dant89\IXAPIClient\NetworkFeatureConfigs
 */
class NetworkFeatureConfigsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkFeatureConfigs(string $id = null, array $filters = []): Response
    {
        $url = '/network-feature-configs';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
