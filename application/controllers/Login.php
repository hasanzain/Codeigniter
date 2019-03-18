<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username, 
			'password' => $password,
		);
		$cek = $this->m_login->cek_login("user",$data)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "telah berhasil login", 
			);
			$this->session->set_userdata($data_session);
		}else{
			echo "Username atau password salah";
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */