<?php

namespace Zilbam\OssRendu1Gitmoji;

use PHPUnit\Framework\TestCase;
use Zilbam\OssRendu1Gitmoji\ApiService;

class ApiServiceTest extends TestCase
{
    public function testGet()
    {
        $apiService = new ApiService("https://api.github.com/emojis");
        $response = $apiService->get();
        $this->assertIsString($response);
    }
}
