<?php

/**
 * 测试用例的基础类
 */
require_once __DIR__.'../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Demo\Index;

class TestDemo extends TestCase
{
    public function testItGatDemo()
    {
        $index = new Index;
        $test  = $index->test();
        var_dump($test);
        $this->assertTrue(1 == $test);
    }


}