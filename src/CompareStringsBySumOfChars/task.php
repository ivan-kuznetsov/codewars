<?php

namespace Tasks\CompareStringsBySumOfChars;

use Tasks\Task as BasicTask;

/**
 * Compare two strings by comparing the sum of their values (ASCII character code).
 *
 * For comparing treat all letters as UpperCase
 * null/NULL/Nil/None should be treated as empty strings
 * If the string contains other characters than letters, treat the whole string as it would be empty
 * Your method should return true, if the strings are equal and false if they are not equal.
 *
 * Examples:
 * "AD", "BC"  -> equal
 * "AD", "DD"  -> not equal
 * "gf", "FG"  -> equal
 * "zz1", ""   -> equal (both are considered empty)
 * "ZzZz", "ffPFF" -> equal
 * "kl", "lz"  -> not equal
 * null, ""    -> equal
 */
class task extends BasicTask
{
    protected $link = 'https://www.codewars.com/kata/576bb3c4b1abc497ec000065/train/php';

    public function test()
    {
        $this->assertSame(true, $this->run("AD", "BC"));
    }

    public function optimal()
    {
        if (!$a || preg_match('/[^a-z]/i', $a)) {
            $a = "";
        }
        if (!$b || preg_match('/[^a-z]/i', $b)) {
            $b = "";
        }
        list($a, $b) = [strtoupper($a), strtoupper($b)];
        return array_reduce(str_split($a), function ($s, $c) {
              return $s + ord($c);
          }, 0) === array_reduce(str_split($b), function ($s, $c) {
              return $s + ord($c);
          }, 0);
    }

    public function run(...$params)
    {
        [$s1, $s2] = func_get_args();
        return $this->charSum($s1) == $this->charSum($s2);
    }

    protected function charSum($string)
    {
        $string = $this->verify($string);

        return array_reduce(str_split(strtoupper($string)), function ($carry, $item) {
            return $carry += ord($item);
        });
    }

    protected function verify($string)
    {
        if ($string === null || preg_match("/[^a-z]/i", $string)) {
            return '';
        }

        return $string;
    }
}