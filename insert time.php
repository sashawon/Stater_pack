<?php 
    include('db.php');
 ?>

<?php 
    if (isset($_POST['submit'])) {
          $des = $_POST['des'];
    
      $sql = "INSERT INTO time(des) VALUES ('$des');";

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
	<!--Titel-->
	<title></title>
	<link rel="icon" type="image/png" sizes="32x32" href="images/#">
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

	<form action="" method="POST">
		<input type="text" name="des">
		<input type="submit" name="submit">
	</form>

	<!--javascript-->
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
</body>
</html>