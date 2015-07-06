<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cemployee extends CI_Controller  {
	function __construct(){
		parent::__construct();
        if (!$this->session->userdata('role')=="2") {
			redirect('index.php/login');
		}
		$this->load->helper('text');
		$this->load->model("coordinator_model/cemployee_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
        
        
        
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['query'] = $this->cemployee_model->getAllemployee(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
        
        $this->load->view('coordinator_view/cemployee_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
      
         
        
	}
    
    
    
}