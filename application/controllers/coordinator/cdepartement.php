<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdepartement extends CI_Controller {
    function __construct(){
		parent::__construct();
        if (!$this->session->userdata('role')=="2") {
			redirect('index.php/login');
		}
		$this->load->helper('text');
		$this->load->model("coordinator_model/cdepartement_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
        
        
        
	}

	public function index() 
	{
        $data['query'] = $this->cdepartement_model->getAllInfo();
		$this->load->view('coordinator_view/cdepartement_view', $data);
	}
}
