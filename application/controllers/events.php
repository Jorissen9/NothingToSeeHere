<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {

		$this -> load -> view('templates/navigation_view');
		$this -> load -> view('events_view');

		$Session = Gdn::Session();
		//var_dump($Session -> User);

		// Declare an alias for the user session.
		// Check if the user session is valid and Admin.
		
		//if ($Session -> IsValid())
		//	if (is_object($Session -> User) && $Session -> User -> Admin)
		//		$this -> load -> view('events_controlpanel_view');
			
		$this -> load -> view('templates/footer_view');

	}

}
