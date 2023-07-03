<?php

namespace Zilbam\OssRendu1Gitmoji;

class Gitmoji
{
    public string $name;
    public string $emoji;
    public string $description;
    public string $code;

    public function __construct(string $name = "", string $emoji = "", string $description = "", string $code = "")
    {
        $this->name = $name;
        $this->emoji = $emoji;
        $this->description = $description;
        $this->code = $code;
    }

    public function __toString(): string
    {
        return $this->emoji;
    }
}
