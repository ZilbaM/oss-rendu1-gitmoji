<?php

namespace Zilbam\OssRendu1Gitmoji;

use PHPUnit\Framework\TestCase;
use Zilbam\OssRendu1Gitmoji\GitmojisService;
class GitmojisServiceTest extends TestCase
{

    public function test__construct()
    {
        $gitmojiService = new GitmojisService();
        $this->assertInstanceOf(GitmojisService::class, $gitmojiService);
    }

    public function testGetAllGitmojis()
    {
        $gitmojiService = new GitmojisService();
        $gitmojis = $gitmojiService->getAllGitmojis();
        $this->assertIsArray($gitmojis);
        $this->assertNotEmpty($gitmojis);
        $this->assertArrayHasKey('art', $gitmojis);

    }
}
