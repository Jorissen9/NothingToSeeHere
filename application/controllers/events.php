<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {

		$this -> load -> model('events_model');
		$data["events"] = $this -> events_model -> getEvents();

		$Session = Gdn::Session();
		//var_dump($Session -> User);

		// Declare an alias for the user session.
		// Check if the user session is valid and Admin.

		//if ($Session -> IsValid())
		//	if (is_object($Session -> User) && $Session -> User -> Admin)
		$this -> load -> adminpanel('events_view', $data);


	}

	function AddEvent() {
		
		$picture = "";	
		
		$this -> load -> model('events_model');
		$this -> form_validation -> set_rules('date', 'Date', 'callback_date_check');
		$this -> form_validation -> set_rules('title', 'Title', 'trim|required|min_length[2]|max_length[45]|xss_clean');
		$this -> form_validation -> set_rules('address', 'Address', 'required|xss_clean');
		$this -> form_validation -> set_rules('description', 'Description', 'trim|required|min_length[10]|xss_clean|max_length[500]');

		$_POST['date'] = $this -> input -> post('date_year') . '-' . $this -> input -> post('date_month') . '-' . $this -> input -> post('date_day');
		
		
		if ($this->form_validation->run() == FALSE) {
		//if ($Session -> IsValid())
		//	if (is_object($Session -> User) && $Session -> User -> Admin)
		$data["events"] = $this -> events_model -> getEvents();
		$this -> load -> adminpanel('events_view', $data);

		}
		else {
			if (isset($_FILES['picture']) && $_FILES['picture']['size'] > 0) {
				
			$config['upload_path'] = './assets/imgs/Events/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '10000';
			$config['max_width']  = '4096';
			$config['max_height']  = '4096';
		    $config['encrypt_name'] = true;
	
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			
			if ( ! $this->upload->do_upload('picture'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $errors[0]);
			}
			else
			{
                $upload_data = $this->upload->data();
                $picture = 'Events/' . $upload_data['file_name'];
			}
		}

		$newEvent = array(
			'Title' => $this -> input -> post('title'), 
			'Date' => $this -> input -> post('date'), 
			'Time' => $this -> input -> post('time'), 
			'Address' => $this -> input -> post('address'), 
			'Description' => $this -> input -> post('description'),
			'Picture' => $picture
		);
		
			$this -> events_model -> AddEvent($newEvent);
			redirect("events");
		}

	}

	public function date_check() {

		if (checkdate($this -> input -> post('date_month'), $this -> input -> post('date_day'), $this -> input -> post('date_year'))) {
			return TRUE;
		} else {
			$this -> form_validation -> set_message('date_check', 'The date field is required.');
			return FALSE;
		}
	}

}
