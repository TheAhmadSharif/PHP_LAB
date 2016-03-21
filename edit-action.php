<?php 

	$id = $_POST['ID'];
	$name = $_POST['NAME'];
	echo "$id" . "<br>";
	echo "$name" . "<br>";
	include 'connect.php';

	$sql  = "UPDATE User SET Name = '$name' WHERE Id='$id'";



	if (mysqli_query($connection, $sql)) {
		echo "Edit is held Successfully " . "$id";
	}
	else {
		mysqli_error($connection);
	}

	mysqli_close($connection);

	header( "refresh:2;url=index.php" );




 ?>