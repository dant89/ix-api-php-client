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
    const URL = '/network-service-configs';

    /**
     * @param string $id
     * @return Response
     */
    public function deleteNetworkServiceConfig(string $id): Response
    {
        $url = self::URL . '/' . $id;
        return $this->delete($url);
    }

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getNetworkServiceConfigs(string $id = null, array $filters = []): Response
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
    public function patchNetworkServiceConfig(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->patch($url, $data);
    }

    /**
     * @param array $data
     * @return Response
     */
    public function postNetworkServiceConfig(array $data): Response
    {
        return $this->post(self::URL, $data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function putNetworkServiceConfig(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->put($url, $data);
    }
}
