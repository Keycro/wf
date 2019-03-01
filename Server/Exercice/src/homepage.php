<?php
/*
# Exercice 1

In this exercice, we need to create the home-page of the TagBeSill project.

You must use the "fixture.sql" file to create the testing data.

The test will need some dependencies. So you are expected to install them with composer.

Test case :
 * Uou must create a well formed html page
 * You must load the records from the database
 * Foreach record :
 	* The record image must be displayed into the html
 	* The record title must be displayed into the html
 	* The record description must be displayed into the html

To validate it, just cd into the exercice folder and run "php phpunit-6.5.5.phar".

*/
$db = "tagbesill";
$host = "127.0.0.1";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);

} catch  (\PDOException $exception) {
    print_r('[ERROR] %s Impossible connection to the DB %s');
    print_r($exception);
}


$articles = $connection->query('SELECT * FROM article');
$articles = $connection->query('SELECT * FROM article WHERE title like "Trello"');



$AllArticles = $articles->fetchAll();
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <style>
        .container {
            border: 1px solid darkblue;
            -webkit-border-radius: ;
            -moz-border-radius: ;
            border-radius:  20%;
            padding: 3rem;
            margin-top: 2rem;
        }
    </style>

    <body>

    </body>
    </html>

<?php
foreach($AllArticles as $article) {
    ?>
    <div class='container'>
        <div class='col-xs-12 col-md-4'>
            <img src='<?php echo $article['img']; ?>'/>
        </div>
        <div class='col-xs-12 col-md-8'>
            <h3 class="text-3d">'<?php echo $article['title']; ?>'</h3>
            <h4>'<?php echo $article['pub_date']; ?>'</h4>
            <p>'<?php echo $article['description']; ?>'</p>
        </div>
    </div>
<?php
}