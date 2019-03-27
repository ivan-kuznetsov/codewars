<?php

namespace Tasks\PutMarksToTheBalance;

use Tasks\Task as BasicTask;

/*
Each exclamation mark weight is 2; Each question mark weight is 3. Put two string left and right to the balance, Are they balanced?

If the left side is more heavy, return "Left"; If the right side is more heavy, return "Right"; If they are balanced, return "Balance".

Examples
balance("!!","??") == "Right"
balance("!??","?!!") == "Left"
balance("!?!!","?!?") == "Left"
balance("!!???!????","??!!?!!!!!!!") == "Balance"
 */

class task extends BasicTask
{
    protected $link = 'https://www.codewars.com/kata/exclamation-marks-series-number-17-put-the-exclamation-marks-and-question-marks-to-the-balance-are-they-balanced/train/php';

    public function test()
    {
        $this->assertEquals('Right', $this->mine('!!', '??'));
        $this->assertEquals('Left', $this->mine('!??', '?!!'));
        $this->assertEquals('Left', $this->mine('!?!!', '?!?'));
        $this->assertEquals('Balance', $this->mine('!!???!????', '??!!?!!!!!!!'));
    }

    public function optimal()
    {
        $a = substr_count($l, '!') * 2 + substr_count($l, '?') * 3;
        $b = substr_count($r, '!') * 2 + substr_count($r, '?') * 3;
        if ($a == $b) {
            return 'Balance';
        } elseif ($a < $b) {
            return 'Right';
        } else {
            return 'Left';
        }
    }

    public function mine(...$params)
    {
        [$s1, $s2] = func_get_args();

        if ($this->countWeight($s1) > $this->countWeight($s2)) {
            return 'Left';
        } elseif ($this->countWeight($s1) < $this->countWeight($s2)) {
            return 'Right';
        } else {
            return 'Balance';
        }
    }

    public function countWeight($string)
    {
        $a = array_count_values(str_split($string));
        $q = array_key_exists('?', $a) ? $a['?'] * 3 : 0;
        $e = array_key_exists('!', $a) ? $a['!'] * 2 : 0;

        return $q + $e;
    }
}
