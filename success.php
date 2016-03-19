<?php
$link = mysqli_connect("localhost", "root", "root", "Foo");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_POST['ID']);
$Name = mysqli_real_escape_string($link, $_POST['Name']);
 
$sql = "INSERT INTO User (ID, NAME) VALUES ('', '$Name')";
if(mysqli_query($link, $sql)){
		    echo "Records added successfully.";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	mysqli_close($link);

?>