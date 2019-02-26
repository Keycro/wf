<?php
// Exercise "how many bit in number"

//Start a function
//given we have one integer argument "number"

function bitInANumber (int $number):int{
    //create a variable "counter" as 0
    $counter = 0;

    //create a variable "compare" as 0
    $compare = 1;
    // While the "compare" variable is lesser then "number"

    while ($compare < $number) {
        // increment "counter"
        $counter++;
        $compare = $compare << 1;
    }
    //Return "counter"
    return $counter;
}



        // increment "counter"
        //shift left one bit in "compare"

        //Return "counter"
//End