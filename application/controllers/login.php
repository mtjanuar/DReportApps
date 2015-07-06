<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('login_view');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
                      'verifikasi' => 'true');
		$this->load->model('auth_model'); // load model_user
		$hasil = $this->auth_model->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['role'] = $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=="1") {
				redirect('index.php/admin/cadmin');
			}
			elseif ($this->session->userdata('role')=="2") {
				redirect('index.php/coordinator/cdashboard');
			} 
            elseif ($this->session->userdata('role')=="3") {
				redirect('index.php/employee/ereport');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>