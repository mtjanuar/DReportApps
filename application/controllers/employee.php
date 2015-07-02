<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends CI_Controller  {
	function __construct(){
		parent::__construct();
		$this->load->model("employee_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listEmployee'] = $this->employee_model->getAllEmployee(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('admin_view/employee_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

//	public function addEmployee()
//	{
//		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
//	}
//
//	public function addEmployeeDb()
//	{
//		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
//	}

	
}

/* Location: ./application/controllers/products.php */
