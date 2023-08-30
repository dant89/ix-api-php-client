<?php

namespace Dant89\IXAPIClient;

use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

abstract class AbstractHttpClient implements HttpClientInterface
{
    private Client $client;
    private CurlHttpClient $httpClient;
    protected const URL = null;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->httpClient = new CurlHttpClient([
            'headers' => [
                'User-Agent' => 'IX-API-PHP-CLIENT/2.0.0',
            ]
        ]);
    }

    public function delete(string $id, ?string $extendUri = null): Response
    {
        $uri = $this::URL . '/' . $id . ($extendUri ?? '');
        return $this->generateHttpResponse('DELETE', $uri);
    }

    public function get(?string $id = null, ?array $filters = [], ?string $extendUri = null): Response
    {
        $uri = $this::URL . (!is_null($id) ? '/' . $id : '') . ($extendUri ?? '');
        return $this->generateHttpResponse('GET', $uri, [
            'query' => $filters
        ]);
    }

    public function patch(string $id, array $data): Response
    {
        return $this->generateHttpResponse('PATCH', $this::URL . '/' . $id, [
            'json' => $data
        ]);
    }

    public function post(array $data, ?string $extendUri = null): Response
    {
        $uri = $this::URL . ($extendUri ?? '');
        return $this->generateHttpResponse('POST', $uri, [
            'json' => $data
        ]);
    }

    private function getFullUrl(string $url): string
    {
        $baseUrl = rtrim($this->client->getBaseUrl(), '/') . '/';
        return $baseUrl . 'api/' . $this->client->getApiVersion() . $url;
    }

    private function generateHttpResponse(string $method, string $url, array $options = []): Response
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
            $response->setHeaders($httpResponse->getHeaders(false));
            $response->setContent($httpResponse->toArray(false));
        } catch (DecodingExceptionInterface |
            RedirectionExceptionInterface |
            ClientExceptionInterface |
            ServerExceptionInterface |
            TransportExceptionInterface $e
        ) {
            $response->setStatus(500);
            $response->setContent([
                'title' => 'Client Error',
                'message' => $e->getMessage()
            ]);
        }

        return $response;
    }
}
