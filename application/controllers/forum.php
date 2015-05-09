<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {


		//$data['User'] = $session_data;
		$data['ClientID'] = "372750243";
		$data['Secret'] = "0db1130bd2526eca034c49389d21377c";
		//$data['vanilla_sso'] = $session_data['vanilla_sso'];
		//$this -> load -> view('sidebar_view');
		$this -> load -> template('forum_view', $data);
		

	}

}
