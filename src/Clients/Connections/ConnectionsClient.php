<?php

namespace Dant89\IXAPIClient\Clients\Connections;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class ConnectionsClient extends AbstractHttpClient
{
    protected const URL = '/connections';

    public function getStatistics(string $id): Response
    {
        return $this->get($id, [], '/statistics');
    }

    public function getStatisticTimeseries(string $id, string $aggregate): Response
    {
        return $this->get($id, [], "/statistics/{$aggregate}/timeseries");
    }

    public function getLoa(string $id): Response
    {
        return $this->get($id, [], '/loa');
    }

    public function postLoa(string $id, array $data): Response
    {
        return $this->post($data, "{$id}/loa");
    }

    public function getCancellationPolicy(string $id): Response
    {
        return $this->get($id, [], '/cancellation-policy');
    }
}
