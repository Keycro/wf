<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
            font: 14px sans-serif;
        }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<div class="container">

<?php
if (isset($_SESSION['loggedin'])) {
    if (!$_SESSION["loggedin"] == true) echo "<div class=\"jumbotron jumbotron-fluid\"'><p><a href='login.php'> login.php  </a> </p></div>";
}
?>

