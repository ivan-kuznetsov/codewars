<?php

namespace Tasks;

abstract class Task
{
    abstract public function mine(...$params);

    abstract public function test();

    public function optimal()
    {
        return;
    }

    public function assertSame($a, $b)
    {
        echo ($a === $b) ? "It's OK" . PHP_EOL : "It's not OK" . PHP_EOL;
    }

    public function assertEquals($a, $b)
    {
        echo ($a == $b) ? "It's OK" . PHP_EOL : "It's not OK" . PHP_EOL;
    }
}