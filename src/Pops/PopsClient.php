<?php

namespace Dant89\IXAPIClient\Pops;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class PopsClient
 * @package Dant89\IXAPIClient\Pops
 */
class PopsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getPops(string $id = null, array $filters = []): Response
    {
        $url = '/pops';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
