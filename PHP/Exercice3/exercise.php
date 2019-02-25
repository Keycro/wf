<?php

$input;
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
  