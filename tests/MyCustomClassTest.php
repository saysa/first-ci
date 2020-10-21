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

    public function testCalcul()
    {
        $instance = new MyCustomClass();
        $calcul = $instance->calcul(1, 2);

        $this->assertEquals(3, $calcul);
    }
}
