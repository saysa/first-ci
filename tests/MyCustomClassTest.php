<?php

namespace App\Tests;

use App\MyCustomClass;
use PHPUnit\Framework\TestCase;

class MyCustomClassTest extends TestCase
{
    public function testHello()
    {
        $instance = new MyCustomClass();
        $hello = $instance->hello('Saysa');
        $this->assertEquals('Hello Saysa', $hello);
    }
}
