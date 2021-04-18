<?php

session_start() ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cycle";


$pass = $_POST['password'];
$emal = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$s = "SELECT * FROM userdata WHERE email ='$emal' AND password ='$pass' " ;

$result=$conn->query($s);
$check = $result->num_rows;

if ($check) {
	$usersql = " SELECT username FROM userdata WHERE email = '$emal' " ;
	$user = $conn->query($usersql) ;
	$row = $user->fetch_assoc();
	$_SESSION['username'] = $row['username'] ;
	$_SESSION['email'] = $emal ; 
    header('location:home.php');  
} else {
  echo "error" ;
}


$conn->close();
?>