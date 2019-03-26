<?php

namespace Tasks\PlayingWithPassphrases;

//https://www.codewars.com/kata/559536379512a64472000053/train/php

function playPass($s, $n)
{
    return reverse(changeCase(replaceDigits(shiftLetters($s, $n))));
}


function shiftLetters($s, $n)
{
    $s = str_split($s);

    foreach ($s as $index => $char) {
        $s[$index] = getChar($char, $n);
    }

    return implode($s);
}

function getChar($char, $n)
{
    $letters1 = range('a', 'z');
    $letters2 = range('A', 'Z');

    if ($n == 0 || (!in_array($char, $letters1) && !in_array($char, $letters2))) {
        return $char;
    }

    if ($key = array_search($char, $letters1)) {
        return getElement($letters1, $key, $n);
    } elseif ($key = array_search($char, $letters2)) {
        return getElement($letters2, $key, $n);
    }
}

function replaceDigits($s)
{
    $s = str_split($s);

    foreach ($s as $index => $char) {
        $s[$index] = is_numeric($char) ? 9 - (int)$char : $char;
    }

    return implode($s);
}

function changeCase($s)
{
    $result = '';

    foreach (str_split($s) as $index => $char) {
        $result .= ($index % 2 != 0) ? strtolower($char) : strtoupper($char);
    }

    return $result;
}


function reverse($s)
{
    return implode(array_reverse(str_split($s)));
}


function getElement($array, $start, $length)
{
    for ($i = $start; ; $i++) {
        if ($i == count($array)) {
            $i = 0;
        }

        if ($length == 0) {
            return $array[$i];
        }

        $length--;
    }
}


var_dump(playPass('MY GRANMA CAME FROM NY ON THE 23RD OF APRIL 2015', 2));