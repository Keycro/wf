<?php
include 'dbconnect.php';

//If form not submitted, display form.
if (!isset($_POST['submit'])){


    ?>

    <form method="post" action="search.php">
        Titletosearch:  <br />
        <input type="text" name="titletosearch" />

        <p />
        <input type="submit" name="submit" value="Go" />
    </form>

    <?php
//If form submitted, process input.
}else{
//Retrieve string from form submission.
  //$city = $_POST['titletosearch']
    // echo "titletosearch $city.";


    if (empty($_POST['titletosearch'])) echo "titletosearch empty";
    // if ($_POST['titletosearch'] == "" ) echo "titletosearch empty";
    else {
        var_dump($_POST['titletosearch']);

        echo "searching for" . $_POST['titletosearch'];

        $SearchString = "%".$_POST['titletosearch']."%";

     //   echo "<a href='view.php?id=".$result[$count]['id']."'> <h1> ".$result[$count]['title']."</h1></a>";

//Selecting the id, title and description from articles
        $SQL = $connection->prepare('SELECT id,title,description FROM article WHERE title LIKE :TITLES');
        $SQL->bindParam(':TITLES',$SearchString, PDO::PARAM_STR);
        $SQL->execute();
        $SQL->setFetchMode(PDO::FETCH_ASSOC);
        print_r($SQL->rowCount());
        $result = $SQL->fetchAll();

        for($ArrayIndex = 0 ; $ArrayIndex < count($result);$ArrayIndex++ ) {
            echo "<h1><br><a href='view.php?id=".$result[$ArrayIndex]['id']."'>".$result[$ArrayIndex]['title']."<a/></h1>";
            echo "<br>".$result[$ArrayIndex]['description'];




        }
    }
}
?>

</body>
</html>