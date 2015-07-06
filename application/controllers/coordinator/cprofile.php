<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cprofile extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model("coordinator_model/cprofile_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
        
        
        
	}

	public function index()
	{
        $data['query'] = $this->cprofile_model->getAllInfo();
		$this->load->view('coordinator_view/cprofile_view', $data);
	}
}
