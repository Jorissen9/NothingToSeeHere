<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

    function index() {
		
		$this -> load -> template('events_view');
		
		
	}
	

}
