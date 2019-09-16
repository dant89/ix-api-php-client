<?php

namespace Dant89\IXAPIClient\NetworkFeatures;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class NetworkFeaturesClient
 * @package Dant89\IXAPIClient\NetworkFeatures
 */
class NetworkFeaturesClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkFeatures(string $id = null, array $filters = []): Response
    {
        $url = '/network-features';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
