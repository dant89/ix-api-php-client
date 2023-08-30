<?php

namespace Dant89\IXAPIClient\Clients\PortReservations;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class PortReservationsClient extends AbstractHttpClient
{
    protected const URL = '/network-services';

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
