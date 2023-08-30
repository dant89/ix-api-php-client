<?php

namespace Dant89\IXAPIClient\Clients\NetworkServices;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class NetworkServicesClient extends AbstractHttpClient
{
    protected const URL = '/network-services';

    public function getStatistics(string $id): Response
    {
        return $this->get($id, [], '/statistics');
    }

    public function getStatisticTimeseries(string $id, string $aggregate): Response
    {
        return $this->get($id, [], "/statistics/{$aggregate}/timeseries");
    }

    public function getChangeRequest(string $id): Response
    {
        return $this->get($id, [], '/change-request');
    }

    public function postChangeRequest(string $id, array $body): Response
    {
        return $this->post($body, "{$id}/change-request");
    }

    public function deleteChangeRequest(string $id): Response
    {
        return $this->delete($id, '/change-request');
    }

    public function getCancellationPolicy(string $id): Response
    {
        return $this->get($id, [], '/cancellation-policy');
    }
}
