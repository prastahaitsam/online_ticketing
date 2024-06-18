<?php
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

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<form action="controller/register.php" method="POST">
							<div class="form-group mb-3">
								<label class="floating-label" for="Nama">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="Nama" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="notelp">Nomor Telepon</label>
								<input type="number" name="notelp" class="form-control" id="Notelp" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="Email">Email address</label>
								<input type="email" name="email" class="form-control" id="Email" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">Username</label>
								<input type="text" name="username" class="form-control" id="Username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" name="password" class="form-control" id="Password" placeholder="">
							</div>
							<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
							</div>
							<button class="btn btn-primary btn-block mb-4">Sign up</button>
						</form>
						<p class="mb-2">Already have an account? <a href="signin.php" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->



</body>

</html>
