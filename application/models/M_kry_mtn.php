<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class M_kry_mtn extends CI_Model {
	private $_table = "karyawan_mtn";
 
	public $nrp_mtn;
	public $nama_karyawan_mtn;
	public $foto = "default.jpg";
	public $shift;
	public $jabatan;
	public $id_section; 

	public function rules()
	{
		return [ 
 
			['field' => 'nrp_mtn',
			'label' => 'NRP',
			'rules' => 'required|max_length[6]'],

			['field' => 'nama_karyawan_mtn',
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

	public function getAllKaryawanMTN()
	{
		$this->db->select('*');
		$this->db->from('karyawan_mtn');
		$this->db->join('section', 'section.id_section = karyawan_mtn.id_section');
		return $this->db->get()->result_array();
	}

	public function getAllKaryawanMTN2()
	{
		$this->db->select('*');
		$this->db->from('karyawan_mtn');
		$this->db->join('section', 'section.id_section = karyawan_mtn.id_section');
		return $this->db->get()->result();
	}

	public function getAllKaryawanMTN3()
	{
		$this->db->select('*');
		$this->db->from('karyawan_mtn');
		$this->db->join('section', 'section.id_section = karyawan_mtn.id_section');
		return $this->db->get();
	}

	public function getAllSection()
	{	
		return $query = $this->db->get('section')->result_array();	
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["nrp_mtn" => $id])->row();
	}

	public function tambahDataKaryawanMTN()
	{
		$post = $this->input->post();
		$this->nrp_mtn = $post["nrp_mtn"];
		$this->nama_karyawan_mtn = $post["nama_karyawan_mtn"];
		$this->foto = $this->_uploadImage();
		$this->shift = $post["shift"];
		$this->jabatan = $post["jabatan"];
		$this->id_section = $post["section"];
		$this->db->insert($this->_table, $this);
	}

	public function updateDataKaryawanMTN()
	{
		$post = $this->input->post();
		$this->nrp_mtn= $post["nrp_mtn"];
		$this->nama_karyawan_mtn = $post["nama_karyawan_mtn"];
		
		
		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["old_image"];
		}

		$this->shift = $post["shift"];
		$this->jabatan = $post["jabatan"];
		$this->id_section = $post["section"];

		$this->db->update($this->_table, $this, array('nrp_mtn' => $post['nrp_mtn']));
	}

	public function hapusKryMTN($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("nrp_mtn" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/karyawan_mtn/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nrp_mtn;
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
		$karyawan_mtn = $this->getById($id);
		if ($karyawan_mtn->foto != "default.jpg") {
			$filename = explode(".", $karyawan_mtn->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/karyawan_mtn/$filename.*"));
		}
	}
	
	function cek_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

}

/* End of file M_kry_mtn.php */
/* Location: ./application/models/M_kry_mtn.php */