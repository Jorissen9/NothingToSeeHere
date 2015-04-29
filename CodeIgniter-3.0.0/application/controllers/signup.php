<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

		public function index() {
        /*
         * Form tutorial
         * http://tutsforweb.blogspot.be/2012/05/user-registration-with-codeigniter.html
         * Date of birth tutorial
         * http://tutsforweb.blogspot.be/2012/03/user-friendly-date-with-codeigniter-and.html
         * Recaptcha for codeigniter
         * https://github.com/Cnordbo/RECaptcha-for-Codeigniter
         */

        $this->load->library('recaptcha');
        //Store the captcha HTML for correct MVC pattern use.
        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();

        $this->form_validation->set_rules('voornaam', 'Naam', 'trim|required|min_length[2]|xss_clean');
        $this->form_validation->set_rules('achternaam', 'Achternaam', 'trim|required|min_length[2]|xss_clean');
        $this->form_validation->set_rules('gebruikersnaam', 'Gebruikersnaam', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('password', 'Wachtwoord', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('passconf', 'Bevestiging Wachtwoord', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('dob', 'Geboortedatum', 'callback_date_check');
        $_POST['dob'] = $this->input->post('dob_year') . '-' . $this->input->post('dob_month') . '-' . $this->input->post('dob_day');

        //$this->load->view('include/view_containerStart');
        //$this->load->view('view_login');
        //$this->load->view('ho');

        //$this->recaptcha->recaptcha_check_answer();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view', $data);
        } else {
            if (2!=0/*!$this->recaptcha->getIsValid()*/) {
                $this->session->set_flashdata('error', 'Incorrect captcha');
                $this->load->view('signup_view', $data);
                header('location: signup/');
            } else {
                $postdata = array('email_address' => $this->input->post('email'), 'member_name' => $this->input->post('gebruikersnaam'));
                $email_address = $this->model_hexion->check_existing_email($postdata['email_address']);
                $member_name = $this->model_hexion->check_existing_membername($postdata['member_name']);
                if (count($member_name) > 0 || count($email_address) > 0 ) {
                    $this->session->set_flashdata('error', 'Deze gebruikersnaam of Email is al in gebruik.');
                    $this->load->view('signup_view', $data);
                    header('location: signup/');
                } else {
                    $this->session->set_flashdata('success', 'Registratie is gelukt!');
                    $this->load->view('signup_view', $data);
                    header('location: signup/');
                    $displayname = $this->input->post('voornaam') . " " . $this->input->post('achternaam');
                    $nieuwlid = array(
                        'member_name' => $this->input->post('gebruikersnaam'),
                        'real_name' => $displayname,
                        'email_address' => $this->input->post('email'),
                        'avatar' => 'hexion_avatar.jpg',
                        'passwd' => md5($this->input->post('password')),
                        'birthdate' => $this->input->post('dob')
                    );
                    $this->model_hexion->registreer($nieuwlid);
                }
            }
        }
	}

    public function date_check() {
        // Check als er een correcte datum ingevoerd is in ons registretie form
        if (checkdate($this->input->post('dob_month'), $this->input->post('dob_day'), $this->input->post('dob_year'))) {
            return TRUE;
        } else {
            $this->form_validation->set_message('date_check', 'The Birthdate field is required.');
            return FALSE;
        }
    }
}

