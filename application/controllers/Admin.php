<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {
	public function __construct()  
	{
		parent::__construct();
		$this->load->model(array('M_mesin','M_section','M_user','M_kry_mtn','M_kry_prod'));
		$this->load->library('form_validation','pdf');
		if($this->session->userdata('status_admin') != "login_admin"){
			$this->session->set_flashdata('alert','Akses Di Tolak / Anda Belum Login');
		 	redirect(base_url());
		 }
	}

	public function index()
	{
		$data['judul'] = 'Halaman Utama Admin';
		$data['jml_mesin'] = $this->M_mesin->getAllMesin3()->num_rows();
		$data['jml_section'] = $this->M_section->getAllSection3()->num_rows();
		$data['jml_kry_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN3()->num_rows();
		$data['jml_kry_prod'] = $this->M_kry_prod->getAllKaryawanPROD3()->num_rows();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');  	
	}

	public function data_mesin() 
	{
		$data['mesin'] = $this->M_mesin->getAllMesin();
		$data['judul'] = 'Data mesin';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_mesin',$data);
		$this->load->view('templates/footer');  	
	} 

	public function tambah_mesin()
	{ 
		$data['section'] = $this->M_mesin->getAllSection();
		$data['judul'] = 'Form Tambah Mesin';

		$this->form_validation->set_rules('no_mesin', 'No Mesin', 'required|max_length[9]');
		$this->form_validation->set_rules('nama_mesin', 'Nama Mesin', 'required');
		$this->form_validation->set_rules('work_center', 'Work Center', 'required');
		$this->form_validation->set_rules('section', 'Section', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/tambah_data_mesin',$data);
			$this->load->view('templates/footer');
		}else
		{
			$cek = $this->M_mesin->cek_data(array('no_mesin' => $this->input->post('no_mesin')), 'data_mesin')->num_rows();
            if ($cek > 0) {
                $this->session->set_flashdata('flash_cek', 'Sudah Ada !');
                redirect('admin/tambah_mesin');
            }
			$this->M_mesin->tambahDataMesin();
			$this->session->set_flashdata('flash_mesin','Mesin Berhasil Ditambahkan');
			redirect('admin/tambah_mesin');	
		}

	}

	public function update_mesin($id)
	{
		$data['mesin'] = $this->M_mesin->getMesinById($id);
		$data['section'] = $this->M_mesin->getAllSection();
		$data['judul'] = 'Form Update Mesin';

		$this->form_validation->set_rules('no_mesin', 'No Mesin', 'required');
		$this->form_validation->set_rules('nama_mesin', 'Nama Mesin', 'required');
		$this->form_validation->set_rules('work_center', 'Work Center', 'required');
		$this->form_validation->set_rules('section', 'Section', 'required');

		if($this->form_validation->run() == false) 
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/update_data_mesin',$data);
			$this->load->view('templates/footer');
		}else
		{
			$this->M_mesin->updateDataMesin();
			$this->session->set_flashdata('flash_mesin','Mesin Berhasil Di Update');
			redirect('admin/data_mesin');	
		}

	}

	public function hapus_mesin($id)
	{ 
		$this->M_mesin->hapusDataMesin($id);
		$this->session->set_flashdata('flash_mesin','Mesin Berhasil Dihapus');
		redirect('admin/data_mesin');	
	}

	public function user_admin()
	{
		$data['judul'] = 'Data User ADMIN';
		$data['user_admin'] = $this->M_user->getAllUserAdmin();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_user_admin',$data);
		$this->load->view('templates/footer');  	
	}

	public function user_mtn()
	{
		$data['judul'] = 'Data User MTN';
		$data['user_mtn'] = $this->M_user->getAllUserMtn();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_user_mtn',$data);
		$this->load->view('templates/footer');  	
	}

	public function user_prod()
	{
		$data['judul'] = 'Data User PROD';
		$data['user_prod'] = $this->M_user->getAllUserProd();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_user_prod',$data);
		$this->load->view('templates/footer');  	
	}

	public function tambah_user()
	{
		$data['section'] = $this->M_mesin->getAllSection();
		$data['judul'] = 'Form Tambah User';

		$this->form_validation->set_rules('nrp', 'Nrp', 'required');
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('akses', 'Akses', 'required');

		$akses = $this->input->post('akses');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/tambah_data_user',$data);
			$this->load->view('templates/footer');
		}else if($akses == 'ADMIN'){
			$this->M_user->tambahDataAdmin();
			$this->session->set_flashdata('flash_user','User Admin Berhasil Ditambahkan');
			redirect('admin/tambah_user');	
		}else if($akses == 'MTN'){
			$this->M_user->tambahDataMtn();
			$this->session->set_flashdata('flash_user','User Maintenace Berhasil Ditambahkan');
			redirect('admin/tambah_user');	
		}else{
			$this->M_user->tambahDataProd();
			$this->session->set_flashdata('flash_user','User Production Berhasil Ditambahkan');
			redirect('admin/tambah_user');
		}

	}

	public function update_admin($id)
	{
		$data['admin'] = $this->M_user->getAdminById($id);
		$data['judul'] = 'Form Update User Admin';

		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/update_user_admin',$data);
			$this->load->view('templates/footer');
		}else
		{
			$this->M_user->updateDataAdmin();
			$this->session->set_flashdata('flash_admin','User Berhasil Di Update');
			redirect('admin/user_admin');	
		}

	}

	public function update_mtn($id)
	{
		$data['mtn'] = $this->M_user->getMtnById($id);
		$data['judul'] = 'Form Update User Maintenace';

		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/update_user_mtn',$data);
			$this->load->view('templates/footer');
		}else
		{
			$this->M_user->updateDataMtn();
			$this->session->set_flashdata('flash_mtn','User Berhasil Di Update');
			redirect('admin/user_mtn');	
		}

	}

	public function update_prod($id)
	{
		$data['prod'] = $this->M_user->getProdById($id);
		$data['judul'] = 'Form Update User Production';

		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('admin/update_user_prod',$data);
			$this->load->view('templates/footer');
		}else
		{
			$this->M_user->updateDataProd();
			$this->session->set_flashdata('flash_prod','User Berhasil Di Update');
			redirect('admin/user_prod');	
		}

	}

	public function hapus_admin($id)
	{ 
		$this->M_user->hapusDataAdmin($id);
		$this->session->set_flashdata('flash_admin','User Admin Berhasil Dihapus');
		redirect('admin/user_admin');	
	}

	public function hapus_mtn($id)
	{ 
		$this->M_user->hapusDataMtn($id);
		$this->session->set_flashdata('flash_mtn','User Maintenace Berhasil Dihapus');
		redirect('admin/user_mtn');	
	}

	public function hapus_prod($id)
	{ 
		$this->M_user->hapusDataProd($id);
		$this->session->set_flashdata('flash_prod','User Production Berhasil Dihapus');
		redirect('admin/user_prod');	
	}

	public function cetak_mesin_pdf()
	{
		ob_start();
		$data['data_mesin'] = $this->M_mesin->getAllMesin2();
		$this->load->view('admin/cetak/data_mesin', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data Mesin.pdf', 'D');
	}

	

}




/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */