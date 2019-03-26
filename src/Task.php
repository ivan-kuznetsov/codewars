<?php

namespace Tasks;

abstract class Task
{
    abstract public function run(...$params);

    abstract public function test();

    public function optimal()
    {
        return;
    }

    public function assertSame($a, $b)
    {
        echo ($a === $b) ? "It's OK" : "It's not OK";
    }
}