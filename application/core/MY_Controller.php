<?php
class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();

		require_once(APPPATH.'views/templates/default.master.php');
		//require_once(APPPATH.'views/navigation_view.php');
		require_once(APPPATH.'libraries/gdn_framework.php');
		
	$Session = Gdn::Session();	

	if ($Session -> IsValid())

	if (is_object($Session->User))
		echo '<script>changeHeader();</script>';

	/*
		$Session = Gdn::Session();
		
		if ($Session -> IsValid()) {
			if (is_object($Session->User)){
				//$session_data = $this -> session -> userdata('logged_in');
				//$data['username'] = $Session->User->Name;
				//$data['session'] = $this -> load -> view('signout_view', $data, true);
				//var_dump($session_data);
				$this -> load -> view('Navigation_View');
			}


		} else {

			//$data['session'] = $this -> load -> view('signin_view', null, true);
			$this -> load -> view('Navigation_View');
		}*/



	}

}
