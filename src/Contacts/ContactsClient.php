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
    const URL = '/contacts';

    /**
     * @param string $id
     * @return Response
     */
    public function deleteContact(string $id): Response
    {
        $url = self::URL . '/' . $id;
        return $this->delete($url);
    }

    /**
     * @param string|null $id
     * @param array $filters
     * @return Response
     */
    public function getContacts(string $id = null, array $filters = []): Response
    {
        $uri = self::URL;
        if (!is_null($id)) {
            $uri .= '/' . $id;
        }

        return $this->get($uri, $filters);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function patchContact(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->patch($url, $data);
    }

    /**
     * @param array $data
     * @return Response
     */
    public function postContact(array $data): Response
    {
        return $this->post(self::URL, $data);
    }

    /**
     * @param string $id
     * @param array $data
     * @return Response
     */
    public function putContact(string $id, array $data): Response
    {
        $url = self::URL . '/' . $id;
        return $this->put($url, $data);
    }
}
