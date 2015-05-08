<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

    function index() {
		
		$session_data = $this -> session -> userdata('logged_in');
		
		$data['User'] = $session_data;
		$data['ClientID'] = "372750243";
		$data['Secret'] = "0db1130bd2526eca034c49389d21377c";
		

		$this -> load -> view('forum_view', $data);
		
	}
	

}
