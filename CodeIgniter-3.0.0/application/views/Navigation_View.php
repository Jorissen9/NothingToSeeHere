<header>
	<div class="head col-xs-12">
		<a class="logo col-md-4" href="http://www.freshdesignweb.com"><img src="/NothingToSeeHere/CodeIgniter-3.0.0/assets/imgs/Navigation/logo.png" alt="fresh design web"></a>
		<a id="menu-toggle" class="logo" href="#"><i class="icon-reorder"></i></a>
		<nav class="col-md-8" id="navigation">
			<ul class="col-md-12 pull-right" id="main-menu">
				<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'home' || $this -> uri -> segment(1) == '') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
				</li>
				<li class="col-lg-1">
					<a href="#">Forums</a>
				</li>
				<li class="col-lg-1 parent">
					<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">About</a>
					<ul class="sub-menu">
						<li>
							<a href="#">TEDxUHASSELT</a>
						</li>
						<li>
							<a href="#">Our Team</a>
						</li>
						<li>
							<a href="#">Alumni Members</a>
						</li>
						<li>
							<a href="#">Our Partners</a>
						</li>
					</ul>
				</li>
				<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'contact') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('contact')?>" title="contact">Contact</a>
				</li>
				<li class="col-lg-3	dropdown pull-right">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
					<div class="dropdown-menu" style="padding: 15px; padding-bottom: 15px;">
						<form method="post" action="login" accept-charset="UTF-8">
							<input class="form-control" style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
							<input class="form-control" style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
							<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
							<label class="string optional" for="user_remember_me"> Remember me</label>
							<input class="btn btn-block form-control" type="submit" id="sign-in" value="Sign In">
							<label style="text-align:center;margin-top:5px">or</label>
							<input class="btn btn-block form-control" type="button" id="sign-in-google" value="Sign In with Google">
							<input class="btn btn-block form-control" type="button" id="sign-in-twitter" value="Sign In with Twitter">
						</form>
					</div>
				<li>
				<li class="col-lg-1 pull-right">
					<a href="#" title="Home">Sign Up</a>
				</li>
			</ul>
		</nav>
		<div class="clear"></div>
	</div>
</header>
