<?php

//PHP 8 match
function mathOperation2($arg1, $arg2, $operation)
{
    return match ($operation) {
        'sum' => add($arg1, $arg2),
        'sub' => sub($arg1, $arg2),
        'mult' => mult($arg1, $arg2),
        'div' => div($arg1, $arg2),
        default => 'Error',
    };
}

function add($arg1, $arg2)
{
    echo $arg1 + $arg2 . PHP_EOL;
}
function mult($arg1, $arg2)
{
    echo $arg1 * $arg2 . PHP_EOL;
}

function sub($arg1, $arg2)
{
    echo $arg1 - $arg2 . PHP_EOL;
}
function div($arg1, $arg2)
{
    echo $arg1 / $arg2 . PHP_EOL;
}

function mathOperation($arg1, $arg2, $operation)
{
    if (function_exists($operation)) {
        return mathOperation2($arg1, $arg2, $operation);
    } else {
        return "Нет такой операции.";
    }

}
mathOperation2(5, 2, 'sum');

mathOperation2(5, 2, 'mult');

mathOperation2(5, 2, 'sub');

mathOperation2(5, 2, 'div');