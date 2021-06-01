<?php

namespace Smalls\Tests\parse\factory;

use smalls\videoParseTools\parse\factory\DouyinParse;
use PHPUnit\Framework\TestCase;

class DouyinParseTest extends TestCase
{

    public function testHandle()
    {
        $url = "https://v.douyin.com/JeoLRe4/";
        $douyinParse = new DouyinParse();
        $parseResponse = $douyinParse->start($url);
        var_dump($parseResponse);
        $this->assertEquals($url, $parseResponse->getOriginalUrl());
    }
}