<?php 
		$connection = mysqli_connect("localhost", "root", "root", "Foo");
	 	$sql = "SELECT * FROM User";
	 	$result = mysqli_query($connection, $sql);


 ?>