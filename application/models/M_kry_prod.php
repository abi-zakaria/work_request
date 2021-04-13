<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kry_prod extends CI_Model {
	private $_table = "karyawan_prod";

	public $nrp_prod;
	public $nama_karyawan;
	public $foto = "default.jpg";
	public $shift;
	public $jabatan;
	public $id_section;

	public function rules()
	{
		return [

			['field' => 'nrp',
			'label' => 'NRP',
			'rules' => 'required|max_length[6]'],

			['field' => 'nama_karyawan',
			'label' => 'Nama Karyawan',
			'rules' => 'required'],

			['field' => 'shift',
			'label' => 'Shift',
			'rules' => 'required'],

			['field' => 'jabatan',
			'label' => 'Jabatan',
			'rules' => 'required'],

			['field' => 'section',
			'label' => 'Section',
			'rules' => 'required']
		];
	}

	public function getAllKaryawanPROD()
	{
		$this->db->select('*'); 
		$this->db->from('karyawan_prod');
		$this->db->join('section', 'section.id_section = karyawan_prod.id_section');
		return $this->db->get()->result_array();
	}

	public function getAllKaryawanPROD2()
	{
		$this->db->select('*');
		$this->db->from('karyawan_prod');
		$this->db->join('section', 'section.id_section = karyawan_prod.id_section');
		return $this->db->get()->result();
	}

	public function getAllKaryawanPROD3()
	{
		$this->db->select('*');
		$this->db->from('karyawan_prod');
		$this->db->join('section', 'section.id_section = karyawan_prod.id_section');
		return $this->db->get();
	}

	public function getAllSection()
	{	
		return $query = $this->db->get('section')->result_array();	
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["nrp_prod" => $id])->row();
	}

	public function tambahDataKaryawanPROD()
	{
		$post = $this->input->post();
		$this->nrp_prod = $post["nrp"];
		$this->nama_karyawan = $post["nama_karyawan"];
		$this->foto = $this->_uploadImage();
		$this->shift = $post["shift"];
		$this->jabatan = $post["jabatan"];
		$this->id_section = $post["section"];
		$this->db->insert($this->_table, $this);
	}

	public function updateDataKaryawanPROD()
	{
		$post = $this->input->post();
		$this->nrp_prod = $post["nrp"];
		$this->nama_karyawan = $post["nama_karyawan"];
		
		
		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["old_image"];
		}

		$this->shift = $post["shift"];
		$this->jabatan = $post["jabatan"];
		$this->id_section = $post["section"];

		$this->db->update($this->_table, $this, array('nrp_prod' => $post['nrp']));
	}

	public function hapusKryPROD($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("nrp_prod" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/karyawan_prod/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nrp_prod;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$karyawan_prod = $this->getById($id);
		if ($karyawan_prod->foto != "default.jpg") {
			$filename = explode(".", $karyawan_prod->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/karyawan_prod/$filename.*"));
		}
	}
	
	function cek_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

}

/* End of file M_kry_mtn.php */
/* Location: ./application/models/M_kry_mtn.php */