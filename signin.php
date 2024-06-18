<?php
	session_start();
	include "assets/css.php";
    include "assets/js.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<?php 
		    if(isset($_SESSION['gagal'])){
		?>
		        <script>
		            swal("Perhatian !", "<?= $_SESSION['gagal'] ?>", "warning");
		        </script>
		<?php session_destroy(); }
		?>
		<?php 
		    if(isset($_SESSION['gagal_login'])){
		?>
		        <script>
		            swal("Perhatian !", "<?= $_SESSION['gagal_login'] ?>", "warning");
		        </script>
		<?php 
		    session_destroy(); }
		?>
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<form action="controller/proses_login.php" method="POST">
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">Username</label>
								<input type="text" name="username" class="form-control" id="Username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" name="password" class="form-control" id="Password" placeholder="">
							</div>
							<div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Save credentials.</label>
							</div>
							<button class="btn btn-block btn-primary mb-4">Signin</button>
						</form>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="signup.php" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->


</body>

</html>
