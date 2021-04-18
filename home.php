<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>BOOM BOOM</title>
</head>
<body>

<?php
if(!isset($_SESSION['username']))
{
	echo '<a href="login.php"> LOGIN </a>';
	echo "<h1> Welcome </h1>" ;
}else{
	echo "<h1> Welcome </h1>" . "<h1>" .$_SESSION['username']. "</h1>";
	echo '<a href="logout.php"> LOGOUT </a>' ;
}

?>

</body>
</html>