<?php

namespace Dant89\IXAPIClient;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

/**
 * Class AbstractHttpClient
 * @package Dant89\IXAPIClient
 */
abstract class AbstractHttpClient implements HttpClientInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * AbstractHttpClient constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->httpClient = HttpClient::create();
    }

    /**
     * @param string $url
     * @return Response
     */
    public function delete(string $url): Response
    {
        return $this->generateHttpResponse('GET', $url);
    }

    /**
     * @param string $url
     * @return Response
     */
    public function get(string $url): Response
    {
        return $this->generateHttpResponse('GET', $url);
    }

    /**
     * @param string $url
     * @param array $data
     * @return Response
     */
    public function patch(string $url, array $data): Response
    {
        return $this->generateHttpResponse('PATCH', $url, [
            'json' => $data
        ]);
    }

    /**
     * @param string $url
     * @param array $data
     * @return Response
     */
    public function post(string $url, array $data): Response
    {
        return $this->generateHttpResponse('POST', $url, [
            'json' => $data
        ]);
    }

    /**
     * @param string $url
     * @param array $data
     * @return Response
     */
    public function put(string $url, array $data): Response
    {
        return $this->generateHttpResponse('PUT', $url, [
            'json' => $data
        ]);
    }

    /**
     * @param string $url
     * @return string
     */
    private function getFullUrl(string $url): string
    {
        $baseUrl = rtrim($this->client->getBaseUrl(), '/') . '/';
        return $baseUrl . 'api/' . $this->client->getApiVersion() . $url;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return Response
     */
    private function generateHttpResponse(string $method, string $url, array $options = [])
    {
        $response = new Response();

        $bearer = $this->client->getBearerToken();
        if (!is_null($bearer)) {
            $options['auth_bearer'] = $bearer;
        }

        $absoluteUrl = $this->getFullUrl($url);
        try {
            $httpResponse = $this->httpClient->request($method, $absoluteUrl, $options);
            $response->setStatus($httpResponse->getStatusCode());
            $response->setHeaders($httpResponse->getHeaders());
            $response->setContent($httpResponse->toArray());
        } catch (DecodingExceptionInterface |
            RedirectionExceptionInterface |
            ClientExceptionInterface |
            ServerExceptionInterface $e
        ) {
            $response->setContent([
                'title' => 'Client Error',
                'message' => $e->getMessage()
            ]);
        } catch (TransportExceptionInterface $e) {
            $response->setStatus(500);
            $response->setContent([
                'title' => 'Client Error',
                'message' => $e->getMessage()
            ]);
        }

        return $response;
    }
}
