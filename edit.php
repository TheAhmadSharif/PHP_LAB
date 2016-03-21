<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP</title>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
<style>
	.form-control:focus,.form-control:active {
		outline: 0 important;
		box-shadow: none;
	}
	.mtb-30 {
		margin-top: 30px;
		margin-bottom: 30px;
	}
</style>
</head>
<body>



	<div class="container">
		<div class="row">
			<div class="col-md-12">

			<?php 
				include 'connect.php';

				$id = $_GET['ID'];

				$sql = "SELECT * FROM User WHERE id = $id";
	 			$result = mysqli_query($connection, $sql);



				 if (mysqli_num_rows($result) > 0 ) {
					   
					   while ($data = $result->fetch_assoc()) {
					   		$name = $data['Name'];
					   }


				}
				else {
					echo "Something Wrong";
				}


				
			 ?>
				<form action="edit-action.php" method="POST">
					<h4>
						Edit Data (<?php echo "$id"; ?>)
					</h4>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Id" name="ID" value="<?php echo "$id"; ?>">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name" name="NAME" value="<?php echo "$name"; ?>">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-default" name="edit" value="Update">
					</div>

				</form>
					

			</div> <!-- End -->
		</div> <!-- End -->
	</div>  <!-- End -->
</body>
</html>