<?php

namespace Dant89\IXAPIClient\Contacts;

use Dant89\IXAPIClient\AbstractHttpClient;
use Dant89\IXAPIClient\Response;

/**
 * Class ContactsClient
 * @package Dant89\IXAPIClient\Contacts
 */
class ContactsClient extends AbstractHttpClient
{
    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getContacts(string $id = null, array $filters = []): Response
    {
        $url = '/contacts';
        if (!is_null($id)) {
            $url .= '/' . $id;
        }

        return $this->get($url, $filters);
    }
}
