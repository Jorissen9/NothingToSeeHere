<li class="col-lg-1 pull-right <?php echo($this -> uri -> segment(1) == 'signup') ? 'current-menu-item' : ''; ?>">
	<a  href="<?php echo base_url('signup')?>" title="Sign Up">Sign Up</a>
	<!--<a href="<?php echo base_url('vanilla/index.php?p=/entry/register&amp;Target=discussions')?>" rel="nofollow">Sign Up</a>-->
</li>
<li class="col-lg-1 pull-right">

	<a class="dropdown-toggle" href="#" title="Sign In" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
	<div class="dropdown-menu pull-right" style="padding: 15px; padding-bottom: 15px; margin-top: 15px; width:300px;">
		<?php echo validation_errors(); ?>
		<?php echo form_open('verifylogin', array('id' => 'login-form')); ?>
		<input class="form-control" style="margin-bottom: 15px;" type="text" value="<?php echo set_value('username'); ?>" placeholder="Username" id="username" name="username">
		<input class="form-control" style="margin-bottom: 15px;" type="password" value="<?php echo set_value('password'); ?>" placeholder="Password" id="password" name="password">
		<p id="error-message"></p>
		<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
		<label class="string optional" for="user_remember_me"> Remember me</label>
		<input class="btn btn-block form-control" type="submit" id="sign-in" value="Sign In">
		<label style="text-align:center;margin-top:5px">or</label>
		<input class="btn btn-block form-control" type="button" id="sign-in-google" value="Sign In with Google">
		<input class="btn btn-block form-control" type="button" id="sign-in-twitter" value="Sign In with Twitter">
		</form>
	</div>

</li>