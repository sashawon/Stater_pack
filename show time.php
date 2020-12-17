<?php 
    include('db.php');
 ?>

 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<!--Custom CSS-->
		<link rel="stylesheet" href="assets/css/style.css">
		<!--bootstrap-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!--font awesome-->
		<link rel="stylesheet" href="assets/fontawesome/css/all.css">
		<!--fonts-->
		<link rel="stylesheet" href="assets/fonts/fonts.css">
	</head>
	<body>
		<section>
			<?php 
			      $query = "SELECT * FROM time";
			      $data = mysqli_query ($con, $query);
			      $total = mysqli_num_rows($data);
			      
			      if($total!=0)
			      {
			      while($result = mysqli_fetch_assoc($data))
			      {
			      echo"<p>" .$result["time"]. "</p>"
			          ;
			      }
			      }
			      else
			      {
			      echo "No Records Found";
			      }

			 ?>
		</section>
		<!--bootstrap-->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
	</body>
</html>