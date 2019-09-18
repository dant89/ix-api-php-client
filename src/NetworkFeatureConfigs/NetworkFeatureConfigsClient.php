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
    const URL = '/network-feature-configs';

    /**
     * @param string $id
     * @return Response
     */
    public function deleteNetworkFeatureConfig(string $id): Response
    {
        $url = self::URL . '/' . $id;
        return $this->delete($url);
    }

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkFeatureConfigs(string $id = null, array $filters = []): Response
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
    public function patchNetworkFeatureConfig(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->patch($url, $data);
    }

    /**
     * @param array $data
     * @return Response
     */
    public function postNetworkFeatureConfig(array $data): Response
    {
        return $this->post(self::URL, $data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function putNetworkFeatureConfig(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->put($url, $data);
    }
}
