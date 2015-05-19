<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {
		
		$this -> load -> model('events_model');
		$data["events"] = $this -> events_model -> getEvents();
		
		$this -> load -> view('templates/navigation_view');
		$this -> load -> view('events_view',$data);

		$Session = Gdn::Session();
		//var_dump($Session -> User);

		// Declare an alias for the user session.
		// Check if the user session is valid and Admin.
		
		//if ($Session -> IsValid())
		//	if (is_object($Session -> User) && $Session -> User -> Admin)
				$this -> load -> view('events_controlpanel_view');
			
		$this -> load -> view('templates/footer_view');

	}
	
	function AddEvent()
	{
		$this->load->model('events_model');
		$_POST['date'] = $this->input->post('date_year') . '-' . $this->input->post('date_month') . '-' . $this->input->post('date_day');
		
		$newEvent = array(
        	'Title' => $this->input->post('title'),
        	'Date' => $this->input->post('date'),
            'Time' => $this->input->post('time'),
            'Description' => $this->input->post('description')          
        );
		
		$this -> events_model ->AddEvent($newEvent);
		redirect("events");
	}

}
