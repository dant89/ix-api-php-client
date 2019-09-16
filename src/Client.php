<?php

namespace Dant89\IXAPIClient;

use Dant89\IXAPIClient\Auth\AuthClient;
use Dant89\IXAPIClient\Connections\ConnectionsClient;
use Dant89\IXAPIClient\Contacts\ContactsClient;
use Dant89\IXAPIClient\Customers\CustomersClient;
use Dant89\IXAPIClient\Demarcs\DemarcsClient;
use Dant89\IXAPIClient\Devices\DevicesClient;
use Dant89\IXAPIClient\Facilities\FacilitiesClient;
use Dant89\IXAPIClient\Ips\IpsClient;
use Dant89\IXAPIClient\Macs\MacsClient;
use Dant89\IXAPIClient\NetworkFeatures\NetworkFeaturesClient;
use Dant89\IXAPIClient\NetworkFeatureConfigs\NetworkFeatureConfigsClient;
use Dant89\IXAPIClient\NetworkServices\NetworkServicesClient;
use Dant89\IXAPIClient\NetworkServiceConfigs\NetworkServiceConfigsClient;
use Dant89\IXAPIClient\Pops\PopsClient;
use Dant89\IXAPIClient\Products\ProductsClient;

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
     * @return AuthClient|ConnectionsClient|ContactsClient|CustomersClient|DemarcsClient|DevicesClient|FacilitiesClient|IpsClient|MacsClient|NetworkFeaturesClient|NetworkFeatureConfigsClient|NetworkServicesClient|NetworkServiceConfigsClient|PopsClient|ProductsClient
     */
    public function getHttpClient(string $name): AbstractHttpClient
    {
        switch ($name) {
            case 'auth':
                $client = new AuthClient($this);
                break;

            case 'connections':
                $client = new ConnectionsClient($this);
                break;

            case 'contacts':
                $client = new ContactsClient($this);
                break;

            case 'customers':
                $client = new CustomersClient($this);
                break;

            case 'demarcs':
                $client = new DemarcsClient($this);
                break;

            case 'devices':
                $client = new DevicesClient($this);
                break;

            case 'facilities':
                $client = new FacilitiesClient($this);
                break;

            case 'ips':
                $client = new IpsClient($this);
                break;

            case 'macs':
                $client = new MacsClient($this);
                break;

            case 'network-features':
                $client = new NetworkFeaturesClient($this);
                break;

            case 'network-feature-configs':
                $client = new NetworkFeatureConfigsClient($this);
                break;

            case 'network-services':
                $client = new NetworkServicesClient($this);
                break;

            case 'network-service-configs':
                $client = new NetworkServiceConfigsClient($this);
                break;

            case 'pops':
                $client = new PopsClient($this);
                break;

            case 'products':
                $client = new ProductsClient($this);
                break;

            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $client;
    }
}
