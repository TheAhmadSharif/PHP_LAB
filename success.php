<?php 
	$connection = mysqli_connect("localhost", "root", "root", "Foo");
	

	if ($connection === false) {
		die ("Error:" . mysqli_connect_error());
	}

	$Name = $_POST['NAME'];

	$sql = "INSERT INTO User(Id, Name) VALUES ('', '$Name')";

	if (mysqli_query($connection, $sql)) {
		echo "Added Successfully";
	}
	else 
	{
		mysqli_error($connection);
	}

	mysqli_close($connection);
	header( "refresh:1;url=index.php" );






 ?>



