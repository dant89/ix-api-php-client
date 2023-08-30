<?php

namespace Dant89\IXAPIClient\Clients\Auth;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

class AuthClient extends AbstractHttpClient
{
    protected const URL = '/auth';

    public function postAuthToken(string $key, string $secret): Response
    {
        return $this->post([
            'api_key' => $key,
            'api_secret' => $secret
        ], '/token');
    }

    public function postRefreshToken(string $refreshToken): Response
    {
        return $this->post([
            'refresh_token' => $refreshToken
        ], '/refresh');
    }
}
