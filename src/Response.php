<?php

namespace Dant89\IXAPIClient;

/**
 * Class Response
 * @package Dant89\IXAPIClient
 */
final class Response
{
    /**
     * @var array
     */
    private $content;

    /**
     * @var array
     */
    private $headers;

    /**
     * @var int
     */
    private $status;

    /**
     * @return array
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param array $content
     * @return Response
     */
    public function setContent(array $content): Response
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return Response
     */
    public function setHeaders(array $headers): Response
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Response
     */
    public function setStatus(int $status): Response
    {
        $this->status = $status;
        return $this;
    }
}
