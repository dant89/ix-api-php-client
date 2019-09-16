<?php

namespace Dant89\IXAPIClient;

use Dant89\IXAPIClient\Auth\AuthClient;
use Dant89\IXAPIClient\Product\ProductClient;

/**
 * Class Client
 * @package Dant89\IXAPIClient
 */
class Client
{
    /**
     * @var string
     */
    const API_VERSION = 'v1';

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string|null
     */
    private $bearerToken;

    /**
     * Client constructor.
     * @param string $exchangeUrl
     */
    public function __construct(string $exchangeUrl)
    {
        $this->baseUrl = $exchangeUrl;
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return self::API_VERSION;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @return null|string
     */
    public function getBearerToken(): ?string
    {
        return $this->bearerToken;
    }

    /**
     * @param string $bearerToken
     * @return Client
     */
    public function setBearerToken(string $bearerToken): Client
    {
        $this->bearerToken = $bearerToken;
        return $this;
    }

    /**
     * @param string $name
     * @return AuthClient|ProductClient
     */
    public function getHttpClient(string $name): AbstractHttpClient
    {
        switch ($name) {
            case 'auth':
                $client = new AuthClient($this);
                break;

            case 'product':
                $client = new ProductClient($this);
                break;

            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $client;
    }
}
