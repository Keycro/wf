<?php
session_start();
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

var_dump($_GET);

$result = GetFromDBWithId($_GET['id'],$connection);

echo "<div class='row'>";

for ($count = 0; $count < count($result); $count++) {
	if(is_array($result[$count]) && $result[$count] == true ) {
	//Loop And FillIn HTML//////////////////////////
        echo "<h1> ".$result[$count]['title']."</h1></a>";
        echo "<p> " .$result[$count]['description']."</p>";
        echo "<img src='".$result[$count]['img']."'>";
    }
	if($_SESSION["loggedin"] == true) echo "<p><a href='edit.php?id=".$result[$count]['id']."'</a> Edit</p>";
}

echo "</div class='row'>";

include 'footer.php'

?>
<style>


    #link {
        display: block;
        margin-left: 38rem;
        margin-right: auto;
        margin-top: 1rem;
        width: 50px;
        height: 40px;
        color: white;
        padding: 1rem;
        background-color: darkblue;
        -webkit-border-radius: ;
        -moz-border-radius: ;
        border-radius: 30%;
        transition-duration: 0.3s;
        box-shadow: 3px 3px 3px black;


    }
    #link:hover {
        transform: scale(1.2);
        transition-duration: 0.3s;

    }
</style>

    <a id="link" href="http://localhost/3%20day%20project%20PHP/DbWorkExampleWIP/php/list.php">Back</a>
<?

