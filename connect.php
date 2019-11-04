<?php 
		$connection = mysqli_connect("localhost", "root", "password", "Foo");
	 	$sql = "SELECT * FROM User";
	 	$result = mysqli_query($connection, $sql);


 ?>