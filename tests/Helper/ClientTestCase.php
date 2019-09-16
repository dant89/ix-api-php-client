<?php

namespace Tests\Helper;

use Dant89\IXAPIClient\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTestCase
 * @package Tests\Helper
 */
class ClientTestCase extends TestCase
{
    /**
     * @var string
     */
    protected $key = '';

    /**
     * @var string
     */
    protected $secret = '';

    /**
     * @var string
     */
    protected $url = '';

    /**
     * @var Client
     */
    protected $client;

    public function setUp(): void
    {
        parent::setUp();
        $this->client = new Client($this->url);
    }
}
