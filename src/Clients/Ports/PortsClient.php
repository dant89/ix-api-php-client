<?php

namespace Dant89\IXAPIClient\Clients\Ports;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class PortsClient extends AbstractHttpClient
{
    protected const URL = '/ports';

    public function getStatistics(string $id): Response
    {
        return $this->get($id, [], '/statistics');
    }

    public function getStatisticTimeseries(string $id, string $aggregate): Response
    {
        return $this->get($id, [], "/statistics/{$aggregate}/timeseries");
    }
}
