<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_section');
		$this->load->library('form_validation');
	}

	public function data_section()
	{ 
		$data['section'] = $this->M_section->getAllSection();
		$data['judul'] = 'Data Section';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_section',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_section()
	{
		$data['judul'] = 'Form Tambah Section';

		$this->form_validation->set_rules('id_section', 'Id Section', 'required');
		$this->form_validation->set_rules('section', 'Nama Section', 'required');
		$this->form_validation->set_rules('departemen', 'Nama Departemen', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/tambah_data_section',$data);
			$this->load->view('templates/footer');
		}else
		{
			$cek = $this->M_section->cek_data(array('id_section' => $this->input->post('id_section')), 'section')->num_rows();
            if ($cek > 0) {
                $this->session->set_flashdata('flash_cek', 'Sudah Ada !');
                redirect('section/tambah_section');
            }
			$this->M_section->tambahDataSection();
			$this->session->set_flashdata('flash_section','Section Berhasil Ditambahkan');
			redirect('section/tambah_section');	
		}

	}

	public function update_section($id)
	{
		$data['section'] = $this->M_section->getSectionById($id);
		$data['judul'] = 'Form Update Section';

		$this->form_validation->set_rules('id_section', 'Id Section', 'required');
		$this->form_validation->set_rules('section', 'Nama Section', 'required');
		$this->form_validation->set_rules('departemen', 'Nama Departemen', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/update_data_section',$data);
			$this->load->view('templates/footer');
		}else
		{
			$this->M_section->updateDataSection();
			$this->session->set_flashdata('flash_section','Section Berhasil Di Update');
			redirect('section/data_section');	
		}

	}

	public function hapus_section($id)
	{ 
		$this->M_section->hapusDataSection($id);
		$this->session->set_flashdata('flash_section','Section Berhasil Dihapus');
		redirect('section/data_section');	
	}

}

/* End of file Section.php */
/* Location: ./application/controllers/Section.php */