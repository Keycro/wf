<?php

function divide(int $Value, int $by ): float {
    if ($by == 0) {
        throw new RuntimeException("Division by 0 is not allowed");
    }
    return (float)($Value/$by);
}
/*
try {
    divide(10,0);
}   catch (RuntimeException $exception) {
    echo $exception->getMessage();
}*/

function arrayDivide(array $baseArray, int $by) : array {
    $result = [];

    foreach ($baseArray as $base) {
    try {
        echo "VALUE: $base ";
        $result[] = divide($base,$by);
    } catch (RuntimeException $exception) {
        echo "<br>".$exception->getMessage();
        echo "<br> Using ".$base;
        $result[] = $base;
    }

    }

    return $result;
}

print_r(arrayDivide([15,5,6],0));