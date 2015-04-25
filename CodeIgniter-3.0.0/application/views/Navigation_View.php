
		<div id="wrap">
			<header>
				<div class="inner relative">
					<a class="logo" href="<?php echo site_url('home') ?>"><img src="/NothingToSeeHere/CodeIgniter-3.0.0/assets/imgs/Navigation/logo.png" alt="fresh design web"></a>
					<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
					<nav id="navigation">
						<ul id="main-menu">
							<li class="<?php echo($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '') ? 'current-menu-item' : ''; ?>">
								<a href="<?php echo base_url('home'); ?>" title="Home">Home</a>
							</li>
							<li class="parent">
								<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">News</a>
								<ul class="sub-menu">
									<li>
										<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Events</a>
									</li>
									<li>
										<a class="parent" href="#"><i class="icon-file-alt"></i> Pages</a>
										<ul class="sub-menu">
											<li>
												<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Full Width</a>
											</li>
											<li>
												<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Left Sidebar</a>
											</li>
											<li>
												<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Right Sidebar</a>
											</li>
											<li>
												<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Forums</a>
							</li>
							<li class="parent">
								<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">About</a>
								<ul class="sub-menu">
									<li>
										<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">TEDxUHASSELT</a>
									</li>
									<li>
										<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Our Team</a>
									</li>
									<li>
										<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Alumni Members</a>
									</li>
									<li>
										<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Our Partners</a>
									</li>
								</ul>
							</li>
							<li class="<?php echo($this->uri->segment(1) == 'contact') ? 'current-menu-item' : ''; ?>">
								<a href="<?php echo base_url('contact')?>" title="contact">Contact</a>
							</li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
			</header>
		</div>