<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_mtn extends CI_Controller {

	public function __construct() 
	{ 
		parent::__construct();
		$this->load->model('M_kry_mtn');
		$this->load->library('form_validation');
	}

	public function index()
	{ 
		$data['karyawan_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN();
		$data['judul'] = 'Data Karyawan Maintenance';
		
		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_karyawan_mtn',$data);
		$this->load->view('templates/footer');	
	}

	public function tambah_karyawan_mtn() 
	{

		$data['section'] = $this->M_kry_mtn->getAllSection();
		$data['judul'] = 'Tambah Data Karyawan MTN';
		$karyawan_mtn = $this->M_kry_mtn;
		$validation = $this->form_validation;
		$validation->set_rules($karyawan_mtn->rules());

		if ($validation->run()) {
			$cek = $this->M_kry_mtn->cek_data(array('nrp_mtn' => $this->input->post('nrp_mtn')), 'karyawan_mtn')->num_rows();
			if ($cek > 0) {
				$this->session->set_flashdata('flash_cek', 'Sudah Ada !');
				redirect('karyawan_mtn/tambah_karyawan_mtn');
			}
			$karyawan_mtn->tambahDataKaryawanMTN();
			$this->session->set_flashdata('flash_kry_mtn', 'Karyawan MTN Ditambahkan');
			redirect('karyawan_mtn/tambah_karyawan_mtn');	
		} else{
			
			$this->load->view('templates/header',$data);
			$this->load->view('admin/tambah_data_karyawan_mtn',$data);
			$this->load->view('templates/footer');	
		}

	}

	public function update_karyawan_mtn($id = null) 
	{

		if (!isset($id)) redirect('karyawan_mtn/index');

		$data['judul'] = 'Update Data Karyawan MTN';
		$data['section'] = $this->M_kry_mtn->getAllSection();
		$karyawan_mtn = $this->M_kry_mtn;
		$validation = $this->form_validation; 
		$validation->set_rules($karyawan_mtn->rules());

		if ($validation->run()) {
			$karyawan_mtn->updateDataKaryawanMTN();
			$this->session->set_flashdata('flash_kry_mtn', 'Karyawan MTN Di Update');
			redirect('karyawan_mtn/index');
		}

		$data["karyawan_mtn"] = $karyawan_mtn->getById($id);
		if (!$data["karyawan_mtn"]) show_404();


		$this->load->view('templates/header',$data);
		$this->load->view('admin/update_data_karyawan_mtn',$data);
		$this->load->view('templates/footer');	
	}


	public function hapus_karyawan($id)
	{ 
		$this->M_karyawan_mtn->hapusDataKaryawan($id);
		$this->session->set_flashdata('flash_kry_mtn','Karyawan MTN Berhasil Dihapus');
		redirect('karyawan_mtn');	
	}

	public function hapusKryMTN($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->M_kry_mtn->hapusKryMTN($id)) {
			$this->session->set_flashdata('flash_kry_mtn','Karyawan MTN Berhasil Dihapus');
			redirect('karyawan_mtn/index');
		}
	}

	public function cetak_kry_mtn_pdf()
	{


		ob_start();
		$data['data_kry_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN2();
		$this->load->view('admin/cetak/data_karyawan_mtn', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data Karyawan MTN.pdf', 'D');
	}

	

}

/* End of file Karyawan_mtn.php */
/* Location: ./application/controllers/Karyawan_mtn.php */