<?php


namespace App;


class MyCustomClass
{
    public function hello($name)
    {
        return 'Hello ' . $name;
    }

    public function calcul($a, $b)
    {
        return $a + $b + $b;
    }
}
