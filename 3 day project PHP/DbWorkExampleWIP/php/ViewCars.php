<?php
session_start();
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

var_dump($_GET);

$SQL = $connection->prepare('SELECT * FROM cars WHERE id=:NUMBER');
$SQL->bindParam(':NUMBER',($_GET)['id'],PDO::PARAM_INT);
$SqlExec = $SQL->execute();
var_dump($SqlExec);

$result = $SQL->fetchAll();
var_dump($result);
var_dump($SQL->rowCount());


echo "<div class='row'>";

for ($count = 0; $count < count($result); $count++) {
	if(is_array($result[$count]) == true ) {
        foreach ($result[$count] as $key => $value){
            echo "<div class='col'>";
            if($key == 'img') echo "<img src='$value'>";
            else echo "<p> $value </p>";
            echo "</div>";
        }
    }
}

echo "</div class='row'>";

include 'footer.php';


