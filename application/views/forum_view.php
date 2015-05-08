<!--<script type="text/javascript" src="<?php echo base_url('vanilla/js/embed.js')?>"></script>-->
<script type="text/javascript">
	/*** Required Settings: Edit BEFORE pasting into your web page ***/
	<?php
	  $session_data = $this -> session -> userdata('logged_in');
	  
      $User['uniqueid'] = $session_data['UserID'];
      $User['name'] = $session_data['Name'];
      $User['email'] = $session_data['Email'];
      $User['photourl'] = $session_data['Photo'];
 ?>
	var vanilla_forum_url = 'http://tedxpxl.azurewebsites.net/vanilla';
	// The full http url & path to your vanilla forum
	var vanilla_identifier = 'ThisIsSPartaaa';

	// Your unique identifier for the content being commented on
	var vanilla_sso = "<?php $this->jsconnect->WriteJsConnect($User, $_GET, "372750243" , "0db1130bd2526eca034c49389d21377c", true); ?>" ;
	// Your SSO string.

	/*** DON'T EDIT BELOW THIS LINE ***/

	(function() {
		var vanilla = document.createElement('script');
		vanilla.type = 'text/javascript';
		var timestamp = new Date().getTime();
		vanilla.src = vanilla_forum_url + '/js/embed.js';

		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(vanilla);
	})();

</script>