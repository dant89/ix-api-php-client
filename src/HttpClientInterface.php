<?php

namespace Dant89\IXAPIClient;

interface HttpClientInterface
{
    public function delete(string $id): Response;
    public function get(?string $id, ?array $filters=[]): Response;
    public function patch(string $id, array $data): Response;
    public function post(array $data): Response;
}
