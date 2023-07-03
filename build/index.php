<?php

use Zilbam\OssRendu1Gitmoji\GitmojisService;

require_once __DIR__ . '/../vendor/autoload.php';

$gitmojis = new GitmojisService();
var_dump( $gitmojis->getAllGitmojis());