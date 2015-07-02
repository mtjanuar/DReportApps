<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('coordinator_view/cdashboard_view');
	}
}
