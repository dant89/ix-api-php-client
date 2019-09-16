<?php

namespace Dant89\IXAPIClient\Devices;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class DevicesClient
 * @package Dant89\IXAPIClient\Devices
 */
class DevicesClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getDevices(string $id = null, array $filters = []): Response
    {
        $url = '/devices';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
