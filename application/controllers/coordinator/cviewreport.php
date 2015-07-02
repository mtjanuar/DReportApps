<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cviewreport extends CI_Controller  {
	function __construct(){
		parent::__construct();
		$this->load->model("coordinator_model/cviewreport_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
        
        
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['query'] = $this->cviewreport_model->getAllCviewreport(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('coordinator_view/cviewreport_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}
}