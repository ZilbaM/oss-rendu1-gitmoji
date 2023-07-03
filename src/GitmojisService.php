<?php

declare(strict_types=1);

namespace Zilbam\OssRendu1Gitmoji;

use Symfony\Component\DomCrawler\Crawler;

class GitmojisService
{
    private ApiService $apiService;
    private string $url;
    public function __construct()
    {
        $this->url = "https://gitmoji.dev/";
        $this->apiService = new ApiService($this->url);
    }

    /*
     * @param string $path
     * @return Gitmoji[]
     */
    public function getAllGitmojis(string $path = ""): array
    {
        try {
            $pageContent =  $this->apiService->get();
            $html = new Crawler($pageContent);
        } catch (\Exception $e) {
            return [];
        }

        $gitmojis = [];

        $html->filter('#gitmoji-list article')->each(
            function (Crawler $node) use (&$gitmojis) {
                $emoji = $node->filter('button.gitmoji-clipboard-emoji')->text();
                $description = $node->filter('p')->text();
                $code = $node->filter('code span')->text();
                $emojiName = substr($code, 1, -1);

                $gitmojis[$emojiName] = new Gitmoji($emojiName, $emoji, $description, $code);
            }
        );

        return $gitmojis;
    }
}
