<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="root";
$dbname="user1";
$dbport="8889";
/*
$conn=mysqli_connect('mysql:host=localhost;port=3308;dbname=music',
   'root', 'root'); */
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport) or die("could not connect to mysql");

mysqli_select_db($conn,$dbname);
?>
