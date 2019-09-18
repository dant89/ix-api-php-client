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
    const URL = '/ips';

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getIps(string $id = null, array $filters = []): Response
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
    public function patchIp(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->put($url, $data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function putIp(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->patch($url, $data);
    }
}
