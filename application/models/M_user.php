<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model { 

	function get_data($table){
		return $this->db->get($table);
	}
 
	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function getAllUserAdmin()
	{
		return $query = $this->db->get('admin_user')->result_array();	
	}

	public function getAllUserMtn()
	{
		return $query = $this->db->get('mtn_user')->result_array();	
	}

	public function getAllUserProd()
	{
		return $query = $this->db->get('prod_user')->result_array();	
	}

	public function tambahDataAdmin()
	{
		$password = $this->input->post('password');

		$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
			"level" => $this->input->post('akses', true),
		];

		$this->db->insert('admin_user', $data);
	}

	public function tambahDataMtn()
	{
		$password = $this->input->post('password');

		$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
		];

		$this->db->insert('mtn_user', $data);
	}

	public function tambahDataProd()
	{
		$password = $this->input->post('password');

		$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
		];

		$this->db->insert('prod_user', $data);
	}

	public function getAdminById($id)
	{
	
		return $this->db->get_where('admin_user', ['nrp' => $id])->row_array();
	}

	public function getMtnById($id)
	{
	
		return $this->db->get_where('mtn_user', ['nrp' => $id])->row_array();
	}

	public function getProdById($id)
	{
	
		return $this->db->get_where('prod_user', ['nrp' => $id])->row_array();
	}

	public function updateDataAdmin()
	{
		$password = $this->input->post('password');

		if ($password == '') {
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('admin_user', $data);

		}else{
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('admin_user', $data);
		}			
	}

	public function updateDataMtn()
	{
		$password = $this->input->post('password');

		if ($password == '') {
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('mtn_user', $data);

		}else{
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('mtn_user', $data);
		}			
	}

	public function updateDataProd()
	{
		$password = $this->input->post('password');

		if ($password == '') {
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('prod_user', $data);

		}else{
			$data = [
			"nrp" => $this->input->post('nrp', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => md5($password),
			];

		$this->db->where('nrp', $this->input->post('nrp'));
		$this->db->update('prod_user', $data);
		}			
	}


	public function hapusDataAdmin($id)
	{
		$this->db->where('nrp',$id);
		$this->db->delete('admin_user');
	}

	public function hapusDataMtn($id)
	{
		$this->db->where('nrp',$id);
		$this->db->delete('mtn_user');
	}

	public function hapusDataProd($id)
	{
		$this->db->where('nrp',$id);
		$this->db->delete('prod_user');
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */