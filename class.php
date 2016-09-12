<?php
/*
@author Precious Opusunju

Mini Database Class for Simple Userrname Checker

*/

class simpleUc {
	
public function sanitize($username) {
	  	$san = htmlentities($username);
	  	$san = trim($username);
	  	return $san;
}

//Here we'll have function for mysqli procedural
 
public function mysqli_p ($conn, $table, $column, $username) {
 	
mysqli_real_escape_string($conn, $username);

$query = "SELECT $column FROM $table WHERE $column='$username'";

$result = mysqli_query($conn, $query);

if (!mysqli_num_rows($result) > 0) {
  return "$username is available!";
} else if($username === '') {
	return "";
} else {
  return "$username has been used!";
}

}
 
public function mysqli_o ($conn, $table, $column, $username) {

$conn->real_escape_string($username);

$query = "SELECT $column FROM $table WHERE $column='$username'";

$result = $conn->query($query);

if(!$result->num_rows > 0) {
	
	return "$username is available!";
	
} else if($username === '') {
	return "";
} else {
	
	return "$username has been taken";
	
}

}

}
