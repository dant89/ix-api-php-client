<?php

namespace Dant89\IXAPIClient;

final class Response
{
    private array $content = [];
    private array $headers = [];
    private int $status;

    public function getContent(): array
    {
        return $this->content;
    }

    public function setContent(array $content): Response
    {
        $this->content = $content;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): Response
    {
        $this->headers = $headers;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): Response
    {
        $this->status = $status;
        return $this;
    }
}
