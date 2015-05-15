<header class="head col-xs-12">
	<a class="logo col-md-4" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets/imgs/Navigation/logo.png'); ?>" alt="TEDxPXL"></a>
	<a id="menu-toggle" class="logo" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
	<nav class="col-md-8" id="navigation">
		<ul class="col-md-12 " id="main-menu">
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'home' || $this -> uri -> segment(1) == '') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
			</li>
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'events') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('events')?>" title="events">Events</a>
			</li>
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'forum') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('forum')?>" title="forum">Forums</a>
			</li>
			<li class="col-lg-1 parent <?php echo($this -> uri -> segment(1) == 'about') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('about/tedxpxl')?>">About</a>
				<ul class="sub-menu">
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
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'contact') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('contact')?>" title="contact">Contact</a>
			</li>
			<!--<?php echo $session?>-->
			<li class="col-lg-1 pull-right <?php echo($this -> uri -> segment(4) == 'signin') ? 'current-menu-item' : ''; ?>">
				<a id="SignIn" href="<?php echo base_url('forum/#/entry/signin')?>" title="Sign In">Sign In</a>
			</li>
			<li class="col-lg-1 pull-right <?php echo($this -> uri -> segment(3) == 'registernocaptcha') ? 'current-menu-item' : ''; ?>">
				<a id="SignUp" href="<?php echo base_url('forum/#/entry/registernocaptcha')?>" title="registernocaptcha">Sign Up</a>
			</li>

		</ul>
	</nav>
	<div class="clear"></div>
</header>