<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cycle";

$name = $_POST['username'];
$pass = $_POST['password'];
$roll = $_POST['rollno'];
$phon = $_POST['phone'];
$gend = $_POST['gender'];
$host = $_POST['hostel'];
$emal = $_POST['email'];
$rpassword = $_POST['password-repeat'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert into database
$sql = " INSERT INTO `userdata` (`username`, `rollno`, `phone`, `gender`, `hostel`, `email`, `password`) VALUES ('$name', '$roll', '$phon', '$gend', '$host', '$emal', '$pass');" ;

if($pass == $rpassword){

//muti query to enter multiple data into dabase table
if ($conn->query($sql) === TRUE) {
  echo "New records created successfully";
  //to redirect into login page
header('location:login.php');
} else {
  echo " This Roll number already registered " ;
}

}else{
	echo "password did not match ";
}
$conn->close();
?>