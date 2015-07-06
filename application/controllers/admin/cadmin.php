<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($_SESSION)) { 
        session_start(); 
    } 
class Cadmin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('role')=="1") {
			redirect('index.php/login');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin_view/adashboard_view', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('index.php/login');
	}
}
?>