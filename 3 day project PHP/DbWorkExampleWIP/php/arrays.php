<?php

$multiCity=array (
    array ('City', 'Country', 'Continent'),
    array ('Tokyo', 'Japan', 'Asia'),
    array ('Mexico City','Mexico', 'North America'),
    array ('New York City', 'USA', 'North America'),
    array ('Mumbai', 'India', 'Asia'),
    array ('Seoul', 'Korea', 'Asia'),
);

echo $multiCity[4][1] ."</br>";
echo $multiCity[2][1] ."</br>";
$multiCity[2][3] = 'Lisbon';
$multiCity[] = ['newinfo','newinfo2','newinfo3'];

$multiCity[5] = ['newinfo1111','newinfo2222','newinfo333333'];

array_push($multiCity[1],'array_push values');
$multiCity[1][] = 'xxx';
/*
//print_r()
//array_push()

//var_dump($multiCity);
echo "Lines In Aray".count ($multiCity);

for ($row=0; $row<count ($multiCity); $row++){
    echo "<br> Printing: ".$row;
    echo print_r($multiCity[$row]);

    for($column=0; $column<count($multiCity[$row]); $column++){
        echo "<br>".$multiCity[$row][$column];
    }

}

*/
echo '<pre>'; print_r($multiCity); echo '</pre>';

?>