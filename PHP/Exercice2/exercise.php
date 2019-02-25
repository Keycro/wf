<?php
$password;
$salt;


// step 1 - take the first half of the password

$firstpart =substr
($password,
    0,
    floor(strlen($password)/2)+(strlen($password)%2));

// step 2 concat with the var

$lastpart =substr($password,ceil(strlen($password)/2));

$saltedPassword = $firstpart . $salt . $lastpart;


/*$pos = ceil(strlen($password)/2);

// step 1 - take the first half of the password

$firstpart =substr($password,0,$pos);

// step 2 concat with the var

$secondpart =substr($password,$pos);

$saltedPassword = $firstpart.$salt.$secondpart;*/

