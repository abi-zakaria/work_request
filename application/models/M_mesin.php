<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mesin extends CI_Model {
	
	public function getAllMesin()
	{

		$this->db->select('*');
		$this->db->from('data_mesin');
		$this->db->join('section', 'section.id_section = data_mesin.id_section');
		return $query = $this->db->get()->result_array();
	}

	public function getAllMesin2()
	{

		$this->db->select('*');
		$this->db->from('data_mesin');
		$this->db->join('section', 'section.id_section = data_mesin.id_section');
		return $query = $this->db->get()->result_array();
	}

	public function getAllMesin3()
	{

		$this->db->select('*');
		$this->db->from('data_mesin');
		$this->db->join('section', 'section.id_section = data_mesin.id_section');
		return $query = $this->db->get();
	}

	public function getAllSection()
	{	
		return $query = $this->db->get('section')->result_array();	
	}


	public function tambahDataMesin()
	{
		$data = [
			"no_mesin" => $this->input->post('no_mesin', true), // nama_fieid_database => post('nama_variabel_kirim')
			"nama_mesin" => $this->input->post('nama_mesin', true),
			"work_center" => $this->input->post('work_center', true),
			"id_section" => $this->input->post('section', true),
			"status" => 'OK',
		];

		$this->db->insert('data_mesin', $data);
	}

	public function getMesinById($id)
	{
	
		return $this->db->get_where('data_mesin', ['no_mesin' => $id])->row_array();
	}

	public function updateDataMesin()
	{
		$data = [
			"nama_mesin" => $this->input->post('nama_mesin', true),
			"work_center" => $this->input->post('work_center', true),
			"id_section" => $this->input->post('section', true),
		];

		$this->db->where('no_mesin', $this->input->post('no_mesin'));
		$this->db->update('data_mesin', $data);
	}

	public function hapusDataMesin($id)
	{
		$this->db->where('no_mesin',$id);
		$this->db->delete('data_mesin');
	}

	function cek_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

}

/* End of file M_mesin.php */
/* Location: ./application/models/M_mesin.php */