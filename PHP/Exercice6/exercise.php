<?php


function easterReverse(string $filetowrite){

    $filecontent = file_get_contents($filetowrite);

    //echo "$filecontent";

    //echo "<br>Halfway: ".floor(strlen($filecontent)/2);

    $secondPart = substr($filecontent, floor(strlen($filecontent)/2));
    $firstpart = substr($filecontent,0,strlen($secondPart)-1);

    //echo "<br>firstpart:<br>".$firstpart;

    //echo "<br>secondPart:<br>".$secondPart;

    //echo "<br>secondPartReversed:<br>".strrev($secondPart);

    $file = fopen($filetowrite, "r+");
    fseek($file,strlen($firstpart),SEEK_SET);
    fwrite($file,strrev($secondPart),strlen($secondPart));
    fclose($file);

}

easterReverse("file.txt");
