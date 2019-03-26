<?php

namespace Tasks\SimpleBeadsCount;

use Tasks\Task as BasicTask;

/*
Two red beads are placed between every two blue beads. There are N blue beads. After looking at the arrangement below work out the number of red beads.

@ @@ @ @@ @ @@ @ @@ @ @@ @

Implement count_red_beads(n) (in PHP count_red_beads($n); in Java, Javascript, TypeScript, C, C++ countRedBeads(n)) so that it returns the number of red beads.
If there are less than 2 blue beads return 0.
 */

class task extends BasicTask
{
    protected $link = 'https://www.codewars.com/kata/simple-beads-count/train/php';

    public function test()
    {
        $this->assertEquals(0, $this->mine(0));
        $this->assertEquals(0, $this->mine(1));
        $this->assertEquals(4, $this->mine(3));
        $this->assertEquals(8, $this->mine(5));
    }

    public function optimal()
    {
        return $n === 0 ? 0 : ($n - 1) * 2;
    }

    public function mine(...$params)
    {
        [$n] = func_get_args();

        if ($n < 2) {
            return 0;
        }

        return ($n - 1) * 2;

    }

}