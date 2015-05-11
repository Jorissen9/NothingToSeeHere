<?php if (!defined('APPLICATION')) exit();
$Methods = $this->Data('Methods', array());
$SelectedMethod = $this->Data('SelectedMethod', array());
$CssClass = count($Methods) > 0 ? ' MultipleEntryMethods' : ' SingleEntryMethod';

// Testing
//$Methods['Facebook'] = array('Label' => 'Facebook', 'Url' => '#', 'ViewLocation' => 'signin');
//$Methods['Twitter'] = array('Label' => 'Twitter', 'Url' => '#', 'ViewLocation' => 'signin');

echo '<h1 style="margin-top:50px;">'.$this->Data('Title').'</h1>';

// Make sure to force this form to post to the correct place in case the view is
// rendered within another view (ie. /dashboard/entry/index/):
echo $this->Form->Open(array('Action' => $this->Data('FormUrl', Url('/entry/signin')), 'id' => 'Form_User_SignIn'));
echo $this->Form->Errors();

echo '<div class="Entry'.$CssClass.'">';

   // Render the main signin form.
   echo '<div class="MainForm" style="margin-top:50px;">';
   ?>
   <ul>
      <li>
         <?php
            //echo $this->Form->Label('Email/Username', 'Email');
            echo $this->Form->TextBox('Email', array('autocorrect' => 'off', 'autocapitalize' => 'off', 'Wrap' => TRUE, 'placeholder' => 'Email/Username'));
         ?>
      </li>
      <li>
         <?php
            //echo $this->Form->Label('Password', 'Password');
            echo $this->Form->Input('Password', 'password', array('class' => 'InputBox Password', 'placeholder' => 'Password'));
			echo '<br>';
            echo Anchor(T('Forgot Password?'), '/entry/passwordrequest', 'ForgotPassword');
			
			echo '<span style="padding-left: 2.9em; padding-right:2.9em;">or</span>';
			
			if (strcasecmp(C('Garden.Registration.Method'), 'Connect') != 0): 
			$Target = $this->Target();
		      if ($Target != '')
		         $Target = '?Target='.urlencode($Target);
		
		      echo Anchor(T('Register'), '/entry/register'.$Target);
			  
			endif;
         ?>
      </li>
   </ul>
   <?php
   
//   echo $this->Data('MainForm');

   echo '</div>';

   // Render the buttons to select other methods of signing in.
   if (count($Methods) > 0) {
      echo '<div class="Methods" style="margin-top:47px;">'
         .Wrap('<b>'.T('').'</b>', 'div');

      foreach ($Methods as $Key => $Method) {
         $CssClass = 'Method Method_'.$Key;
         echo '<div class="'.$CssClass.'">',
            $Method['SignInHtml'],
            '</div>';
      }

      echo '</div>';
   }

echo '</div>';

?>
<div class="Buttons">
	<ul>
		<li class="pull-left">			
     		<?php echo $this->Form->Button('Sign In', array('class' => 'Button Primary')); ?>		
		</li>
		<br><br><br>
		<li class="pull-left">
			<?php echo $this->Form->CheckBox('RememberMe', T('Keep me signed in'), array('value' => '1', 'id' => 'SignInRememberMe'));   ?>
		</li>
	</ul>
</div>

<?php
echo $this->Form->Close();

// Password reset form.
echo $this->Form->Open(array('Action' => Url('/entry/passwordrequest'), 'id' => 'Form_User_Password', 'style' => 'display: none;'));
?>
<ul>
   <li>
      <?php
         echo $this->Form->Label('Enter your Email address or username', 'Email');
         echo $this->Form->TextBox('Email');
      ?>
   </li>
   <li class="Buttons">
      <?php
         echo $this->Form->Button('Request a new password', array('class' => 'Button Primary'));
         echo Anchor(T('I remember now!'), '/entry/signin', 'ForgotPassword');
      ?>
   </li>
</ul>
<?php echo $this->Form->Close();