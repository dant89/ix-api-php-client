<?php

namespace Dant89\IXAPIClient\Auth;

use Dant89\IXAPIClient\AbstractHttpClient;

/**
 * Class AuthClient
 * @package Dant89\IXAPIClient\Auth
 */
class AuthClient extends AbstractHttpClient
{
    public function postAuthToken(string $key, string $secret)
    {
        $body = [
            'api_key' => $key,
            'api_secret' => $secret
        ];

        return $this->post('/auth/token', $body);
    }

    public function postAuthRefresh(string $refreshToken)
    {
        $body = [
            'refresh_token' => $refreshToken
        ];

        $request = $this->post('/auth/refresh', $body);
        return $request;
    }
}
