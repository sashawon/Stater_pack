<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--Titel-->
		<title></title>
		<link rel="icon" type="image/png" sizes="32x32" href="#">
		<!--Custom CSS-->
		<link rel="stylesheet" href="assets/css/style.css">
		<!--bootstrap-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!--font awesome-->
		<link rel="stylesheet" href="assets/fontawesome/css/all.css">
		<!--fonts-->
		<link rel="stylesheet" href="assets/fonts/fonts.css">
		<link rel="stylesheet" type="text/css" href="assets/datatables/css/dataTables.bootstrap4.min.css"/>

	</head>
	<body>

		<!-- ======= carousal Start ======= -->
		<main class="main-heading carousel_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top:20px;">
						<table class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>F_Name</th>
									<th>M_Name</th>
									<th>NID No</th>
									<th>E_ID</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>ID</td>
									<td>Name</td>
									<td>F_Name</td>
									<td>M_Name</td>
									<td>NID No</td>
									<td>E_ID</td>
									<td><a href="#" class="btn btn-success m-1" data-toggle="modal" data-target="#exampleModal">Details</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>
		<!-- End carousal -->
		<!-- ======= Model Start ======= -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Details</h5>
						<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="mb-3">
								<label for="exampleInputName1" class="form-label">Name</label>
								<input type="name" class="form-control" id="exampleInputName1">
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1">
							</div>
							<div class="mb-3">
								<label for="exampleInputGender" class="form-label pr-5">Gender:</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
									<label class="form-check-label" for="inlineRadio1">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
									<label class="form-check-label" for="inlineRadio2">Female</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
									<label class="form-check-label" for="inlineRadio2">Other</label>
								</div>
							</div>
							<div class="mb-3">
								<div class="form-file">
									<input type="file" class="form-file-input" id="customFile">
									<label class="form-file-label" for="customFile">
										<span class="form-file-text">Choose file...</span>
										<span class="form-file-button">Browse</span>
									</label>
								</div>
							</div>
							<div class="mb-3">
								<select class="form-select" aria-label="Default select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleDataList" class="form-label">Datalist example</label>
								<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
								<datalist id="datalistOptions">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</datalist>
							</div>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Model -->
				
		<!--javascript-->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/datatables/js/jquery.dataTables.min.js"></script>
		<script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>

		<script type="text/javascript">
			$(document).ready( function () {
    			$('table').DataTable({
    				searching: true,
    				ordering: true,
    				paging: true
    			});
			} );
		</script>
	</body>
</html>