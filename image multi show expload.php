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
			      $i='';
			      $query = "SELECT * FROM test";
			      $data = mysqli_query ($con, $query);
			      $total = mysqli_fetch_array($data);
			      $result=$total["image"];
			      $result=explode(" ", $result);
			      $count=count($result)-1;

			      for ($i=0; $i <$count; ++$i) { 
			      	?>
			      		<img style='width: 100px;' class='img-thumbnail' alt='Responsive image' src="upload/<?= $result[$i]?> ">
			      	<?php
			      }
			      
			      /*if($total!=0)
			      {
			      while($result = mysqli_fetch_assoc($data))
			      {
			      echo"<p> <img style='width: 200px;' class='img-thumbnail' alt='Responsive image' src=".$result["image"]."> </p>"
			          ;
			      }
			      }
			      else
			      {
			      echo "No Records Found";
			      }*/

			 ?>
		</section>
		<!--bootstrap-->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
	</body>
</html>