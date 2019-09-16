<?php

namespace Dant89\IXAPIClient\Facilities;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class FacilitiesClient
 * @package Dant89\IXAPIClient\Facilities
 */
class FacilitiesClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getFacilities(string $id = null, array $filters = []): Response
    {
        $url = '/facilities';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
