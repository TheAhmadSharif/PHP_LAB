<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP</title>

<link rel="stylesheet" type="text/css" href="bootstrap4.css">
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
		<div class="row mtb-30">
			<div class="col-md-12">
				<h2>
					CRUD Application (PHP)
				</h2>
				<form action="success.php" method="POST">
					<div class="form-group">
						<input type="text" name="NAME" placeholder="Name" autocomplete="off" class="form-control">
				       
					</div>

					<div class="form-group">
						<button class="btn btn-default" id="submitClick">Submit</button>
					</div>
				       
				</form> <!-- End Form -->
			</div> <!-- End Col -->
		</div> <!-- End Row -->

		<div class="row mtb-30">
			<div class="col-md-12">

					<div id="show">
						
					</div>
				<table class="table table-striped">
								
						
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Action</th>
										<th>Action</th>
									</tr>
								

						
							 <?php 
								
								include 'connect.php';


									
							 	if (mysqli_num_rows($result) > 0 ) {
							 			while ($data = $result->fetch_assoc()) 

							 			{	
							 				?>

							 				<tr>
							 					<td> <?php  echo $data['Id'] ?></td>
							 					<td> <?php  echo $data['Name'] ?></td>
							 					<td> <a href="edit.php?ID=<?php echo $data['Id']?>">Edit</a></td>
							 					<td> <a href="delete.php?id=<?php echo $data['Id'] ?>">Delete</a></td>
							 				<tr>

							 				<?php

							 			}

							 	}

							 	else {
							 		echo " Nothing Found";
							 	}
							 	mysqli_close($connection);

							  ?>	

							

					
				</table>
			</div> <!-- End  -->
		</div> <!-- End Row -->
	</div> <!-- End Conatiner -->

</body>
</html>



