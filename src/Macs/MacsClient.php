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
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getMacs(string $id = null, array $filters = []): Response
    {
        $url = '/macs';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
