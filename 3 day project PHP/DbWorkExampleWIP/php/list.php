<?php 
session_start();
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

//FillIn SQL //////////////////////
$SQL = $connection->prepare('SELECT * FROM article');
$SQL->execute();
$SQL->setFetchMode(PDO::FETCH_ASSOC);
$result = $SQL->fetchAll();
//print_r($SQL->rowCount());

?>
    <style>

        #links {
            display: flex;
            margin: 50px 50px 50px 50px;
            justify-content: space-between;

        }
        .btn.btn-primary {
            transition-duration: 0.3s;

        }
        .btn.btn-primary:hover {
            transition-duration: 0.3s;
            transform: scale(1.4);
        }

    </style>

<?php


//var_dump($result);

    if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"] == true ) echo "<div class='row'>
<div id='links'>
<a class=\"btn btn-primary\" href='new.php'>Add article </a>
<br>
<a class=\"btn btn-primary\" href='http://localhost/3%20day%20project%20PHP/DbWorkExampleWIP/php/'>Home </a>
<br>
<a class=\"btn btn-primary\" href='http://localhost/3%20day%20project%20PHP/DbWorkExampleWIP/php/NewCars.php'>Add Car </a>
<br>
<a class=\"btn btn-primary\" href='search.php'>Search Articles</a>
</div>";

for ($count = 0; $count < count($result); $count++) { 
	echo "<div style='box-shadow: 5px 5px 5px 5px' class=\"jumbotron jumbotron-fluid\">";

  
	if(is_array($result[$count]) == true ) {
	//Loop and Create HTML}

        echo "<a href='view.php?id=".$result[$count]['id']."'> <h1> ".$result[$count]['title']."</h1></a>";
        echo "<p> " .$result[$count]['description']."</p>";
        echo "<img src='".$result[$count]['img']."'>";
        if($_SESSION["loggedin"] == true) echo "<p><a href='edit.php?id=".$result[$count]['id']."'</a> Edit </p>";

    }
	echo "</div>";
}









