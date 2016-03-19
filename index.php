<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP</title>
</head>
<body>
<form action="success.php" method="POST">
       <input type="text" name="Name" placeholder="Name" autocomplete="off">
    <input type="submit" value="Submit" name="submit">
</form>

<table>
	<tr>
		

			<?php 	
					$conn = mysqli_connect("localhost", "root", "root", "Foo");
					$sql = "SELECT * FROM User WHERE ID > 14";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    while($data = mysqli_fetch_assoc($result)) {
					        echo "ID: " . $data["ID"]. " - Name: " . $data["NAME"]. "<br>";
					    }
					} else {
					    echo "0 results";
					}
					mysqli_close($conn);

			 ?>
		

	</tr>
</table>
</body>
</html>



