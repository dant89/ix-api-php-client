<?php

namespace Dant89\IXAPIClient\Demarcs;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class DemarcsClient
 * @package Dant89\IXAPIClient\Demarcs
 */
class DemarcsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getDemarcs(string $id = null, array $filters = []): Response
    {
        $url = '/demarcs';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
