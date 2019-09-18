<?php

namespace Dant89\IXAPIClient\Macs;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class MacsClient
 * @package Dant89\IXAPIClient\Macs
 */
class MacsClient extends AbstractHttpClient
{
    const URL = '/macs';

    /**
     * @param string $id
     * @return Response
     */
    public function deleteMac(string $id): Response
    {
        $url = self::URL . '/' . $id;
        return $this->delete($url);
    }

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getMacs(string $id = null, array $filters = []): Response
    {
        $uri = self::URL;
        if (!is_null($id)) {
            $uri .= '/' . $id;
        }

        return $this->get($uri, $filters);
    }

    /**
     * @param array $data
     * @return Response
     */
    public function postMac(array $data): Response
    {
        return $this->post(self::URL, $data);
    }
}
