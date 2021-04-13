<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtn extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_mesin'); 
		$this->load->model('M_section');
		$this->load->model('M_kry_mtn');
		$this->load->model('M_kry_prod');
		$this->load->model('M_work_request');
		if($this->session->userdata('status_mtn') != "login_mtn"){
			$this->session->set_flashdata('alert','Akses Di Tolak / Anda Belum Login');
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Utama Maintenance';
		$data['wr_baru'] = $this->M_work_request->getWrNew();
		$data['wr_dikerjakan'] = $this->M_work_request->getWrDikerjakan();
		$data['wr_selesai'] = $this->M_work_request->getWrSelesai();
		$data['wr_pending'] = $this->M_work_request->getWrPending();
		$data['wr_pending_dikerjakan'] = $this->M_work_request->getWrPendingDikerjakan();
		$data['wr_rekap_selesai'] = $this->M_work_request->getWrRekapSelesai();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/dashboard',$data);
		$this->load->view('templates/footer_mtn');  
	}

	public function data_mesin() 
	{ 
		$data['mesin'] = $this->M_mesin->getAllMesin();
		$data['judul'] = 'Data mesin';
		
		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/data_mesin',$data);
		$this->load->view('templates/footer_mtn');  	
	}

	public function karyawan_mtn()
	{ 
		$data['karyawan_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN();
		$data['judul'] = 'Data Karyawan Maintenance';

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/data_karyawan_mtn',$data);
		$this->load->view('templates/footer_mtn');	
	}

	public function karyawan_prod()
	{
		$data['karyawan_prod'] = $this->M_kry_prod->getAllKaryawanPROD();
		$data['judul'] = 'Data Karyawan Produksi';

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/data_karyawan_prod',$data);
		$this->load->view('templates/footer_mtn');	
	}

	public function data_section()
	{
		$data['section'] = $this->M_section->getAllSection();
		$data['judul'] = 'Data Section';

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/data_section',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function tanggal_wr() 
	{
		$data['judul'] = 'Pilih Tanggal Work Request';

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/tgl_work_req',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function wr_harian()
	{
		$data['judul'] = 'Laporan Work Request Harian';

		$tanggal_wr = $this->input->post('tgl_wo');
		$shift_wr = $this->input->post('shift_wo');
		$data['wr_harian'] = $this->M_work_request->WrRekapHarian($tanggal_wr,$shift_wr);

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/data_wr_harian',$data);
		$this->load->view('templates/footer_mtn');
	}

}

/* End of file Mtn.php */
/* Location: ./application/controllers/Mtn.php */