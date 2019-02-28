<?php

/*To create an easter egg, your dev leader create a function that shuffle a file. You find this easter egg really dangerous because no rollback can be done.

You decide to create a function called "easterReverse" that take a file path as argument, to reverse the second half part of the file.

Tips : Use "floor(strlen($fileContent) / 2)" to calculate the middle of the file.
Warning : you are not allowed to use "file_put_contents", "w" or "w+" access mode.

To validate it, just cd into the Exercice6 folder and run "php phpunit-6.5.5.phar".*/


$file = "file.txt";
$filetowrite = "fileTemp.txt";

copy($file,$filetowrite);


$filecontent = file_get_contents($filetowrite);

echo "$filecontent";

echo "<br>Halfway: ".floor(strlen($filecontent)/2);

$secondPart = substr($filecontent,floor(strlen($filecontent)/2));
$firstpart = substr($filecontent,0,strlen($secondPart)-1);

echo "<br>firstpart:<br>".$firstpart;

echo "<br>secondPart:<br>".$secondPart;

echo "<br>secondPartReversed:<br>".strrev($secondPart);
