<?php

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');
//Create constant to store non reapting values
$conn=mysqli_connect('localhost', 'root', '' ) or die(mysqli_error);//database connection

$db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());//selecting database
?>