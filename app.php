<?php
require 'class.php';

//set your connection here
$conn = new mysqli("localhost","root","","test");
//initiate class

$simpleUc = new simpleUc;

$table = "test"; //table 
$column = "username"; //column in table
$username = $simpleUc->sanitize($_POST['usern']); //username in post

$mydb = $simpleUc->mysqli_o($conn, $table, $column, $username); //this will do the rest :)

echo $mydb;

?>
