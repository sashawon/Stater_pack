<?php 
    include('db.php');
 ?>
<?php 
    if (isset($_POST['submit'])) {
          $image = $_FILES['image'];
    
	      $imagename = $image['name'];
	      $imagepath = $image['tmp_name'];
	      $imageerror = $image['error'];

      if ($imageerror==0) {
        $destfile = 'upload/'.$imagename;
        move_uploaded_file($imagepath, $destfile);
      }
      

      $sql = "INSERT INTO test(image) VALUES ('$destfile');";

      $query = mysqli_query($con,$sql);

      if($query == 1){
      echo "<h3 style='color:green;'><center>Successfull</center></h3>";
      }else{
      echo "<h3 style='color:red;'><center>Sorry! Try again</center></h3>";
      }
    }    
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
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="file" name="image"><br>
				<input type="submit" name="submit">
			</form>	
		</section>
		<!--bootstrap-->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
	</body>
</html>