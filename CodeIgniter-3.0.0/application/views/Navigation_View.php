<div class="head col-xs-12">
	<a class="logo col-md-4" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets/imgs/Navigation/logo.png'); ?>" alt="TEDxUHasselt"></a>
	<a id="menu-toggle" class="logo" href="#"><i class="icon-reorder"></i></a>
	<nav class="col-md-8" id="navigation">
		<ul class="col-md-12 " id="main-menu">
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'home' || $this -> uri -> segment(1) == '') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
			</li>
			<li class="col-lg-1">
				<a href="#">Events</a>
			</li>
			<li class="col-lg-1 <?php echo($this -> uri -> segment(1) == 'forum') ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo base_url('forum')?>" title="forum">Forums</a>
			</li>
			<li class="col-lg-1 parent">
				<a href="#">About</a>
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
			<?php echo $session?>
		</ul>
	</nav>
	<div class="clear"></div>
</div>