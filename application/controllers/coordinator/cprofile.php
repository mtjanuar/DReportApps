<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller {

	public function index()
	{
		$this->load->view('coordinator_view/cprofile_view');
	}
}
