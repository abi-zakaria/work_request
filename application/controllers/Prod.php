<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prod extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_mesin'); 
		$this->load->model('M_section');
		$this->load->model('M_kry_mtn');
		$this->load->model('M_kry_prod');
		if($this->session->userdata('status_prod') != "login_prod"){
			$this->session->set_flashdata('alert','Akses Di Tolak / Anda Belum Login');
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Utama Produksi';
		$data['mesin'] = $this->M_mesin->getAllMesin();

		$this->load->view('templates/header_prod',$data);
		$this->load->view('produksi/dashboard',$data);
		$this->load->view('templates/footer_prod');  
	}

	public function data_mesin()
	{
		$data['judul'] = 'Data Mesin';
		$data['mesin'] = $this->M_mesin->getAllMesin();

		$this->load->view('templates/header_prod',$data);
		$this->load->view('produksi/data_mesin',$data);
		$this->load->view('templates/footer_prod');  
	}

	public function data_kry_mtn()
	{
		$data['judul'] = 'Data Karyawan MTN';
		$data['kry_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN();

		$this->load->view('templates/header_prod',$data);
		$this->load->view('produksi/data_karyawan_mtn',$data);
		$this->load->view('templates/footer_prod');  
	}

}

/* End of file Prod.php */
/* Location: ./application/controllers/Prod.php */