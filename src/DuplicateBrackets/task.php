<?php

function duplicate_encode($word)
{
    $chars = str_split(strtoupper($word));

    $charCount = array_count_values($chars);

    $result = '';

    foreach ($chars as $char) {

        $count = $charCount[$char];

        $result .= ($count > 1) ? ')' : '(';

    }

    return $result;
}