<?php

namespace Dant89\IXAPIClient\Clients\NetworkServiceConfigs;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class NetworkServiceConfigsClient extends AbstractHttpClient
{
    protected const URL = '/network-service-configs';

    public function getStatistics(string $id): Response
    {
        return $this->get($id, [], '/statistics');
    }

    public function getStatisticTimeseries(string $id, string $aggregate): Response
    {
        return $this->get($id, [], "/statistics/{$aggregate}/timeseries");
    }

    public function getCancellationPolicy(string $id): Response
    {
        return $this->get($id, [], '/cancellation-policy');
    }
}
