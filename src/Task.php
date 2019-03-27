<?php

namespace Tasks;

abstract class Task
{
    abstract public function mine(...$params);

    public function test()
    {
        echo PHP_EOL;
    }

    public function optimal()
    {
        return;
    }

    public function assertSame($a, $b)
    {
        echo ($a === $b) ? '+' : 'F';
    }

    public function assertEquals($a, $b)
    {
        echo ($a == $b) ? '+' : 'F';
    }
}