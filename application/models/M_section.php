<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_section extends CI_Model {

	public function getAllSection() 
	{	
		return $query = $this->db->get('section')->result_array();	
	}

	public function getAllSection2()
	{	
		return $query = $this->db->get('section')->result();	
	}

	public function getAllSection3()
	{	
		return $query = $this->db->get('section');	
	}

	public function getSectionById($id)
	{
	
		return $this->db->get_where('section', ['id_section' => $id])->row_array();
	}

	public function tambahDataSection()
	{
		$data = [
			"id_section" => $this->input->post('id_section', true),
			"section" => $this->input->post('section', true),
			"departemen" => $this->input->post('departemen', true),			
		];

		$this->db->insert('section', $data);
	}

	public function updateDataSection()
	{
		$data = [
			"section" => $this->input->post('section', true),
			"departemen" => $this->input->post('departemen', true),	
		];

		$this->db->where('id_section', $this->input->post('id_section'));
		$this->db->update('section', $data);
	}

	public function hapusDataSection($id)
	{
		$this->db->where('id_section',$id);
		$this->db->delete('section');
	}

	function cek_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

}

/* End of file M_section.php */
/* Location: ./application/models/M_section.php */