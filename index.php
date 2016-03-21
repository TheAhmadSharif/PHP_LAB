<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP</title>

<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
<script src="bower_components/jquery/dist/jquery.min.js"></script>
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
				<h1>
					CRUD Application (PHP)
				</h1>
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


<script>
	
	$(document).ready(function() {

    $("#submitClick").click(function(event) {  

       event.preventDefault();

       $.post("index.php",
		    {
		        Id: "66",
		        Name: "Duckburg"
		    },
		    function(data, status){
		        console.log("Data: " + data + "\nStatus: " + status);
		    });


       
	});
});
</script>



</body>
</html>



