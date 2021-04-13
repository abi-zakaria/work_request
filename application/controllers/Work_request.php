<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_request extends CI_Controller { 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array('M_mesin','M_section','M_user','M_kry_mtn','M_kry_prod','M_work_request'));
		$this->load->library('form_validation','pdf');
	}

	public function tambah_wr($id)
	{
		$data['judul'] = 'Form Work request';
		$data['mesin'] = $this->M_work_request->getMesinById($id);
		$data['no_wr'] = $this->M_work_request->no_wr($id);
		$data['prod'] = $this->M_kry_prod->getAllKaryawanPROD();

		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal_wr'] = date('Y-m-d');
		$data['jam_wr'] = date('H:i:s');

		$this->form_validation->set_rules('problem', 'Problem', 'required');
		$this->form_validation->set_rules('pic_prod', 'PIC Production', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_prod',$data);
			$this->load->view('produksi/form_wr',$data);
			$this->load->view('templates/footer_prod');

		}else
		{
			$this->M_work_request->tambahDataWR();
			$this->M_work_request->updateStatusMesin();
			$this->session->set_flashdata('flash_wr','Work Request Berhasil Dibuat');
			redirect('prod');	
		}
	}

	public function tampil_detail_wr()
	{
		$data['judul'] = 'Data Work Request';
		$data['wr'] = $this->M_work_request->getAllWR();

		$this->form_validation->set_rules('no_detail', 'No Work Request', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_prod',$data);
			$this->load->view('produksi/tampil_wr',$data);
			$this->load->view('templates/footer_prod');

		}else{

			$no_wr = $this->input->post('no_detail');
			$data['detail_wr'] = $this->M_work_request->getWrById($no_wr);

			$this->load->view('templates/header_prod',$data);
			$this->load->view('produksi/detail_wr',$data);
			$this->load->view('templates/footer_prod');
		}
	}

	public function WrBaru()
	{
		$data['judul'] = 'Work Request Baru';
		$data['wr_baru'] = $this->M_work_request->WrNew();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_baru',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function dataWrDikerjakan()
	{
		$data['judul'] = 'Work Request Dikerjakan';
		$data['wr_dikerjakan'] = $this->M_work_request->WrDikerjakan();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_dikerjakan',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function dataWrPendingDikerjakan()
	{
		$data['judul'] = 'Work Request Dikerjakan';
		$data['wr_pending_dikerjakan'] = $this->M_work_request->WrPendingDikerjakan();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_pending_dikerjakan',$data);
		$this->load->view('templates/footer_mtn'); 
	}

	public function WrDikerjakan($no_wr)
	{
		$data['judul'] = 'Form Pengerjaan Work Request';
		$data['no_wr'] = $this->M_work_request->getWrById($no_wr);
		$data['mtn'] = $this->M_kry_mtn->getAllKaryawanMTN();

		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal_dikerjakan'] = date('Y-m-d');
		$data['jam_dikerjakan'] = date('H:i:s');

		$this->form_validation->set_rules('pic_mtn', 'Pic maintenance', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_mtn',$data);
			$this->load->view('maintenance/form_wr_dikerjakan',$data);
			$this->load->view('templates/footer_mtn');

		}else
		{
			$this->M_work_request->setWrDikerjakan();
			$this->session->set_flashdata('flash_wr','Work Request Dikerjakan');
			redirect('mtn');	
		}		
	}

	public function WrDiselesaikan($no_wr)
	{
		$data['judul'] = 'Form Work Request Selesai';
		$data['no_wr'] = $this->M_work_request->getWrById($no_wr);
		$data['mtn'] = $this->M_kry_mtn->getAllKaryawanMTN();

		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal_diselesaikan'] = date('Y-m-d');
		$data['jam_diselesaikan'] = date('H:i:s');

		$this->form_validation->set_rules('penyebab', 'Detail Penyebab', 'required');
		$this->form_validation->set_rules('penyelesaian', 'Penyelesaian', 'required');
		$this->form_validation->set_rules('pic_mtn', 'Pic maintenance', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header_mtn',$data);
			$this->load->view('maintenance/form_wr_selesai',$data);
			$this->load->view('templates/footer_mtn');

		}else
		{
			$this->M_work_request->setWrDiselesaikan();
			$this->session->set_flashdata('flash_wr','Work Request DiSelesaikan');
			redirect('mtn');	
		}		
	}
  
	public function dataWrSelesai()
	{
		$data['judul'] = 'Work Request Selesai';
		$data['wr_selesai'] = $this->M_work_request->WrDiselesaikan();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_selesai',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function dataRekapWrSelesai() 
	{
		$data['judul'] = 'Work Request Selesai';
		$data['wr_rekap_selesai'] = $this->M_work_request->WrRekapSelesai();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_rekap_selesai',$data);
		$this->load->view('templates/footer_mtn');
	}	

	public function dataWrPending()
	{
		$data['judul'] = 'Work Request Pending';
		$data['wr_pending'] = $this->M_work_request->WrPending();

		$this->load->view('templates/header_mtn',$data);
		$this->load->view('maintenance/wr_pending',$data);
		$this->load->view('templates/footer_mtn');
	}

	public function PendingWr($no_wr)
	{
		$this->M_work_request->setWrPending($no_wr);
		$this->session->set_flashdata('flash_wr','Work Request Di Pending');
		redirect('mtn');
	}

	public function WrKerjakanPending($no_wr)
	{
		$this->M_work_request->setWrPending($no_wr);
		$this->M_work_request->setWrKerjaPending($no_wr);
		$this->session->set_flashdata('flash_wr','Work Request Di Pending');
		redirect('mtn');
	}

	public function pilih_no_wr()
	{
		$data['judul'] = 'Form Work request';
		$date1 = date('Ymd');
		$date2 = date('Ymd');

		$data['no_wr'] = $this->M_work_request->no_wr_2();		

		if ($date1 != $date2) {
			
			$this->load->view('templates/header_prod',$data);
			$this->load->view('produksi/form_wr',$data);
			$this->load->view('templates/footer_prod'); 

		}else{
			$data['no_wr'] = $this->M_work_request->no_wr_1();

			$this->load->view('templates/header_prod',$data);
			$this->load->view('produksi/form_wr',$data);
			$this->load->view('templates/footer_prod'); 
		}
	}

}

/* End of file Work_request.php */
/* Location: ./application/controllers/Work_request.php */