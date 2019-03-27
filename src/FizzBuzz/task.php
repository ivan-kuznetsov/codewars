<?php

namespace Tasks\FizzBuzz;

function fizzBuzz($number)
{
    $count = isDivided($number, 3, 5);

    switch ($count) {
        case 1:
            return 'Fizz';

        case 2:
            return 'Buzz';

        case 3:
            return 'FizzBuzz';

            break;

        default:
            return $number;
    }
}

function isDivided(...$args)
{
    list($number, $first, $second) = func_get_args();

    if ($number % $first === 0 && $number % $second !== 0) {
        return 1;
    } elseif ($number % $second === 0 && $number % $first !== 0) {
        return 2;
    } elseif ($number % $second === 0 && $number % $first === 0) {
        return 3;
    } else {
        return 4;
    }
}
