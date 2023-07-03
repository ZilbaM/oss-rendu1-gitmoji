<?php

declare(strict_types=1);

namespace Zilbam\OssRendu1Gitmoji;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

use function PHPUnit\Framework\throwException;

class ApiService
{
    private \Symfony\Contracts\HttpClient\HttpClientInterface $client;
    private string $url;
    public function __construct(string $url)
    {
        $this->client = HttpClient::create();
        $this->url = $url;
    }

    /**
     * @param string $path
     * @return string
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function get(string $path = ""): string
    {
        try {
            $response = $this->client->request('GET', $this->url . $path);
            return $response->getContent();
        } catch (\Exception $e) {
            throwException($e);
            return "";
        }
    }
}
