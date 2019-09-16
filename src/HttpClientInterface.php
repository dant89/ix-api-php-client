<?php

namespace Dant89\IXAPIClient;

interface HttpClientInterface
{
    /**
     * @param string $uri
     * @return $this
     */
    public function delete(string $uri);

    /**
     * @param string $uri
     * @return $this
     */
    public function get(string $uri);

    /**
     * @param string $uri
     * @param array $data
     * @return $this
     */
    public function patch(string $uri, array $data);

    /**
     * @param string $uri
     * @param array $data
     * @return $this
     */
    public function post(string $uri, array $data);

    /**
     * @param string $uri
     * @param array $data
     * @return $this
     */
    public function put(string $uri, array $data);
}
