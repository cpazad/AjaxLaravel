<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>AjaxLaravel</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>


</head>

<body>


	<!-- The Main table -->

	<div class="wrap-table ">
		<a id="student_add_btn" class="btn btn-primary" href="">Add New Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Student Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>UserName</th>
							<th>gender</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td>uname</td>
							<td>gender</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a id="student_show_btn" class="btn btn-sm btn-info" href="#">View</a>
								<a id="student_edit_btn" class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Student Add Modal start from here -->

	<div id="student_add_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-info">Add New Student form</h2>
				</div>
				<div class="modal-body">
					<h4 class="msg"></h4>

					<form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" type="text" name="email">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" type="text" name="cell">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input class="form-control" type="text" name="uname">
						</div>
						<div class="form-group">
							<label for="">Gender</label> <br>
							<input class="" type="radio" value="Male" id="female" name="gender"><label for="Male"> Male</label>
							<input class="" type="radio" value="female" id="female" name="gender"><label for="Female"> female</label>
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control-file" type="file" name="photo">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Add">
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Student Add Modal End-->


	<!-- Student Profile/view Modal start from here -->

	<div id="student_view_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-info">Profile of (Code) </h2>
				</div>
				<div class="modal-body">
					<h4 class="msg"></h4>

					<div class="container">
						
						
						<div class="card shadow m-auto" style="width:400px">
							<img class="card-img-top" src="assets\media\img\pp_photo\woman-crop.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">John Doe</h4>
								<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Name</td>
											<td>Radhwan Rahman Rihan</td>
										</tr>
										<tr>
											<td>Cell Number</td>
											<td>0172255116</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>Rihan</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						

						
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Student  Modal End-->


	<!-- Student Edit Modal start from here -->

	<div id="student_edit_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered ">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-info">Edit Your Profile</h2>
				</div>
				<div class="modal-body">
					<h4 class="msg"></h4>

					<form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" type="text" name="email">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" type="text" name="cell">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input class="form-control" type="text" name="uname">
						</div>
						<div class="form-group">
							<label for="">Gender</label> <br>
							<input class="" type="radio" value="Male" id="female" name="gender"><label for="Male"> Male</label>
							<input class="" type="radio" value="female" id="female" name="gender"><label for="Female"> female</label>
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control-file" type="file" name="photo">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Add">
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Student edit Modal End-->






	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>