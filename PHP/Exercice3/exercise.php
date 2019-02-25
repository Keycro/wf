<?php

$input = [[1,2], [3,2], [5,6],[7,2]];
$brotherA = 0;
$brotherB = 0;

foreach ($input as $play){
    if( $play[0]>$play[1]){

         $brotherA++;
    }else if ($play[0] < $play[1]){
        $brotherB++;
    }
}


if ($brotherA > $brotherB) {
    $winner = 'A';
} else {
    $winner = 'B';
}
