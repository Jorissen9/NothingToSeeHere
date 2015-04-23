<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Simple Login with CodeIgniter</title>
	</head>
	<body>
		<?php echo validation_errors(); ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Sign in to continue</h1>
					<div class="account-wall">
						<div class="col-md-12">
							<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
						</div>
						<div class="col-sm-12">
							<form class="form-signin" action="<?php echo site_url('verifylogin/index') ?>">
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="Email" required autofocus>
								</div>
								<div class="col-sm-4">
									<input type="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="col-sm-4">
									<button class="btn btn-lg btn-primary btn-block" type="submit">
										Sign in
									</button>
									<label class="checkbox pull-left">
										<input type="checkbox" value="remember-me">
										Remember me </label>
								</div>
							</form>
						</div>
					</div>
					<a href="#" class="text-center new-account">Create an account </a>
				</div>
			</div>
		</div>
	</body>
</html>