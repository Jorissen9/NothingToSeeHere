<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct() {
		
		parent::__construct();
		$this -> load -> view('sidebar_view');
	}

    function index() {
    	$this -> load -> view('tedxpxl_view');
	}
	
	function tedxpxl()
	{
		$this -> load -> view('tedxpxl_view');
	}
	
	function team()
	{
		$this -> load -> view('team_view');	
	}
	
	function alumni()
	{
		$this -> load -> view('alumni_view');	
	}
	
	function partners()
	{
		$this -> load -> view('partners_view');	
	}
	
	
	
}