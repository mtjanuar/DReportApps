<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccreatereport extends CI_Controller {

	public function index()
	{
		$this->load->view('coordinator_view/ccreateeport_view');
	}
}
