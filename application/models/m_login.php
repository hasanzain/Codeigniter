<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function cek_login($table,$where)
	{
		return $this->db->get_where($tabe, $where);
	}

	

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */