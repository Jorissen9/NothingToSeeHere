<?php
class MY_Controller extends CI_Controller
{
   function __construct()
   {
      parent::__construct();

		$this -> load -> view('header_view');
		$this -> load -> view('navigation_view');
		
   }
}
