<div id="wrap">
	<header>
		<div class="inner relative">
			<a class="logo" href="http://www.freshdesignweb.com"><img src="/NothingToSeeHere/CodeIgniter-3.0.0/assets/imgs/Navigation/logo.png" alt="fresh design web"></a>
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="<?php echo($this -> uri -> segment(1) == 'home' || $this -> uri -> segment(1) == '') ? 'current-menu-item' : ''; ?>">
						<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
					</li>
					<li><a href="#">Forums</a></li>
					<li class="parent">
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">About</a>
						<ul class="sub-menu">
							<li><a href="#">TEDxUHASSELT</a></li>
							<li><a href="#">Our Team</a></li>
							<li><a href="#">Alumni Members</a></li>
							<li><a href="#">Our Partners</a></li>
						</ul>
					</li>
					<li class="<?php echo($this -> uri -> segment(1) == 'contact') ? 'current-menu-item' : ''; ?>">
						<a href="<?php echo base_url('contact')?>" title="contact">Contact</a>
					</li>
				</ul>
				<ul id="main-menu" class="pull-right login-menu">
					<li >
						<a href="#" title="Home">Sign Up</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form method="post" action="login" accept-charset="UTF-8">
								<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
								<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
								<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
								<label class="string optional" for="user_remember_me"> Remember me</label>
								<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
								<label style="text-align:center;margin-top:5px">or</label>
                                <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
								<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
							</form>
						</div>
					<li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div> 