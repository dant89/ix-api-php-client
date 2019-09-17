# IX-API PHP API Client

[![Latest Stable Version][packagist-image]][packagist-url]
[![Github Issues][github-issues-image]][github-issues-url]

A lightweight PHP API client for the [IX-API](https://ix-api.net).

## Installation

To install, run `composer require dant89/ixapi-client` in the root of your project or add `dant89/ix-api-client` to your composer.json.
```json
"require": {
    "dant89/ix-api-client": "^0.0.2"
}
```

## Usage

Use your provided key / secret credentials for the given implementor URL to return and then set a bearer token:

```php
<?php

use Dant89\IXAPIClient\Client;

// Create base client
$client = new Client(IXAPI_URL);

// Get a bearer token from key / secret
$response = $client->getHttpClient('auth')
    ->postAuthToken(IXAPI_KEY, IXAPI_SECRET);

// Check for valid response status
if ($response->getStatus() === 200) {
    $data = $response->getContent();
    $client->setBearerToken($data['access_token']);
}
```

With the bearer token set, you can return data from all endpoints that require authentication, such as the products endpoints:
```php
<?php

use Dant89\IXAPIClient\Client;

// Create base client
$client = new Client(IXAPI_URL);

// Query for products
$response = $client->getHttpClient('products')
    ->getProducts();

// Check for valid response and set the array of products
if ($response->getStatus() === 200) {
    $products = $response->getContent();
}
````

## Authentication

You will need to speak directly to an exchange to be provided with an API key / secret combination and the URL of their IX-API implementation.

## Contributions

Contributions to the client are welcome, to contribute please:

1. Fork this repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

[packagist-image]: https://img.shields.io/packagist/vpre/dant89/ix-api-client.svg
[packagist-url]: https://packagist.org/packages/dant89/ix-api-client

[github-issues-image]: https://img.shields.io/github/issues/dant89/ix-api-php-client
[github-issues-url]: https://github.com/dant89/ix-api-php-client/issues
