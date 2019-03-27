<?php

namespace Tasks\StringComparison;

var_dump(stringComparision('abc', 'ABC')); //True
var_dump(stringComparision('abc', 'def')); //False
var_dump(stringComparision('abc', 'ABCD')); //True
var_dump(stringComparision('BC', 'abc')); //True

function stringComparision($firstString, $secondString)
{
    $firstString = str_split(strtoupper($firstString));
    $secondString = str_split(strtoupper($secondString));
    $minLen = min(count($firstString), count(($secondString)));

//    for ($i = 0; $i < $minLen; $i++) {
//        if ()
//
//    }
//
//    return ($coincidenceCount == $minLen) ? true : false;
}
