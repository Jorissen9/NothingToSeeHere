<div class="col-sm-6 pull-right">

	<div class="col-md-10 pull-right">
		<div class="col-md-6 panel-body pull-right">
			<div id="login" style="display: none">
				<h1>Log in</h1>
				<form action="">
					<input class="col-md-12 form-control" type="email" placeholder="Email" />
					<div style="height: 5px" class="col-md-12"></div>
					<input class="col-md-12 form-control" type="password" placeholder="Password" />
					<div style="height: 5px" class="col-md-12"></div>
					<div>
						<input class="col-md-12 pull-right form-control btn" type="submit" value="Login" onclick="showLoginButtons()"/>
					</div>
				</form>
			</div>
			<div id="register" style="display: none">
				<h1>Register</h1>
				<form action="">
					<input class="col-md-12 form-control" type="email" placeholder="Email" />
					<div style="height: 5px" class="col-md-12"></div>
					<input class="col-md-12 form-control" type="password" placeholder="Password" />
					<div style="height: 5px" class="col-md-12"></div>
					<div>
						<input class="col-md-12 pull-right form-control btn" type="submit" value="Register" onclick="showLoginButtons()"/>
					</div>
					<div class="col-md-12" style="height: 5px"></div>
				</form>
			</div>
			<a id="loginShow" class="col-md-12 form-control btn" onclick="showLoginForm()">Login</a>
			<div id="loginSpace" class="col-md-12" style="height: 5px"></div>
			<a id="registerShow" class="col-md-12 form-control btn" onclick="showRegisterForm()">Register</a>
		</div>
	</div>
</div>