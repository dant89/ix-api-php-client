<?php

namespace Dant89\IXAPIClient\Connections;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class ConnectionsClient
 * @package Dant89\IXAPIClient\Connections
 */
class ConnectionsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getConnections(string $id = null, array $filters = []): Response
    {
        $url = '/connections';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
