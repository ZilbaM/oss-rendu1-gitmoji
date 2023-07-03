<?php

declare(strict_types=1);

namespace Zilbam\OssRendu1Gitmoji;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class ApiService
{
    private \Symfony\Contracts\HttpClient\HttpClientInterface $client;
    private string $url;
    public function __construct($url)
    {
        $this->client = HttpClient::create();
        $this->url = $url;
    }

    /**
     * @param string $path
     * @return string|\Exception or Exception
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function get(string $path = "") : string | \Exception
    {
        try{
            $response = $this->client->request('GET', $this->url . $path);
            return $response->getContent();
        } catch (\Exception $e) {
            return $e;
        }
    }
}