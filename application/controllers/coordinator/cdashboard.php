<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('role')=="2") {
			redirect('index.php/login');
		}
		$this->load->helper('text');
	}

	public function index() 
	{
		$this->load->view('coordinator_view/cdashboard_view');
	}
}
