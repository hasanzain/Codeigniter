<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$data = array(
			'username' => $username, 
			'password' => $password,
		);
		$cek = $this->m_login->cek_login("user",$data)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login", 
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('admin'));
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