<?php 

	$id = $_GET['id'];
	echo "$id" . "<br>";
	include 'connect.php';
	$sql  = "DELETE FROM User WHERE Id='$id'";


	if (mysqli_query($connection, $sql)) {
		echo "Delete Successfully " . "$id" . " No from the Database.";
	}
	else {
		mysqli_error($connection);
	}

	mysqli_close($connection);

	header( "refresh:1;url=index.php" );




 ?>