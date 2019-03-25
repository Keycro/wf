<?php


include 'dbconnect.php';

//var_dump($_GET);

/*
foreach ($_GET as $key => $value) {
    echo "<br><br>MyParam: $key VAlue: $value";
}
*/

//echo "idtodosomething" . $_GET['idtodosomething'];

echo "title to search for" . $_GET['titletosearch'];


//My SQL will be this
$SQL = $connection->prepare('SELECT * FROM article WHERE title LIKE :TITLE');
//Replaces the parameter
$SQL->bindParam(':TITLE',$_GET['titletosearch'], PDO::PARAM_STR);

//Execute
$SQL->execute();
$SQL->setFetchMode(PDO::FETCH_ASSOC);
print_r($SQL->rowCount());
$result = $SQL->fetchAll();

for ($count = 0; $count < count($result); $count++) {
    echo "<div class='row'>";


    if(is_array($result[$count]) == true ) {
        ?>

        <h1> <?php echo $result[$count]["title"]?></h1>
        <p> <?php echo $result[$count]["description"]?></p>
        <img <?php echo "<img src='".$result[$count]['img']."'>";?>
        <br> <a href='view.php?id=<?php echo $result[$count]['id']?>'><?php echo $result[$count]['title']?></a>
            <?php



    }
    echo "</div>";
}
