<nav class="head navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<!--<a id="menu-toggle" class="logo" href="#"><span style="width: 50px; height: 50px;" class="glyphicon glyphicon-menu-hamburger"></span></a>-->
			<a href="<?php echo base_url('home'); ?>"><img class="logo img-responsive" src="<?php echo base_url('assets/imgs/Navigation/logo.png'); ?>" alt="TEDxPXL"></a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="main-menu">
				<li class="<?php echo($this -> uri -> segment(1) == 'home' || $this -> uri -> segment(1) == '') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
				</li>
				<li class="<?php echo($this -> uri -> segment(1) == 'events') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('events')?>" title="events">Events</a>
				</li>
				<li class="<?php echo($this -> uri -> segment(1) == 'forum') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('forum')?>" title="forum">Forums</a>
				</li>
				<li class="dropdown <?php echo($this -> uri -> segment(1) == 'about') ? 'current-menu-item' : ''; ?>">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#<?php //echo base_url('about/tedxpxl') ?>">About <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="<?php echo($this -> uri -> segment(2) == 'tedxpxl') ? 'current-submenu-item' : ''; ?>">
							<a href="<?php echo base_url('about/tedxpxl')?>" title="tedxpxl">TEDxPXL</a>
						</li>
						<li class="<?php echo($this -> uri -> segment(2) == 'team') ? 'current-submenu-item' : ''; ?>">
							<a href="<?php echo base_url('about/team')?>" title="team">Our Team</a>
						</li>
						<li class="<?php echo($this -> uri -> segment(2) == 'alumni') ? 'current-submenu-item' : ''; ?>">
							<a href="<?php echo base_url('about/alumni')?>" title="alumni">Alumni Members</a>
						</li>
						<li class="<?php echo($this -> uri -> segment(2) == 'partners') ? 'current-submenu-item' : ''; ?>">
							<a href="<?php echo base_url('about/partners')?>" title="partners">Our Partners</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo($this -> uri -> segment(1) == 'contact') ? 'current-menu-item' : ''; ?>">
					<a href="<?php echo base_url('contact')?>" title="contact">Contact</a>
				</li>

			</ul>
			<!--<?php echo $session?>-->
			<ul class="nav navbar-nav navbar-right" id="main-menu">
				<li class="<?php echo($this -> uri -> segment(4) == 'signin') ? 'current-menu-item' : ''; ?>">
					<a id="SignIn" href="<?php echo base_url('forum/#/entry/signin')?>" title="Sign In">Sign In</a>
				</li>
				<li class="<?php echo($this -> uri -> segment(3) == 'registernocaptcha') ? 'current-menu-item' : ''; ?>">
					<a id="SignUp" href="<?php echo base_url('forum/#/entry/registernocaptcha')?>" title="registernocaptcha">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
</nav>