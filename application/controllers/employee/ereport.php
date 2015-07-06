<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($_SESSION)) { 
        session_start(); 
    } 
class Ereport extends CI_Controller {
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('role')!="3") {
			redirect('index.php/login');
		}
		$this->load->helper('text');
        $this->load->model('employee_model/ereport_model');
    }
     
    public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('employee_view/edashboard_view', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('index.php/login');
	}
    
    function view_laporan(){
        
        $data['query'] = $this->ereport_model->getReport();
        
        $this->load->view('employee_view/eviewreport_view', $data);    
    }
    
    function create_laporan(){
        $this->load->view('employee_view/ecreatereport_view');
    }
    
    function profile_user(){
        $this->load->view('employee_view/eprofile_view');
    }
    
}
