
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['judul'] = 'Login System';

		$this->load->view('login',$data);	
	}


	public function auth(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if ($this->form_validation->run() != false) {
			
			$where = array('username'=>$username, 'password'=>md5($password));

			$data_1 = $this->M_user->edit_data($where,'admin_user');
			$d_1 = $this->M_user->edit_data($where,'admin_user')->row();
			$cek_1 = $data_1->num_rows();

			$data_2 = $this->M_user->edit_data($where,'mtn_user');
			$d_2 = $this->M_user->edit_data($where,'mtn_user')->row();
			$cek_2 = $data_2->num_rows();

			$data_3 = $this->M_user->edit_data($where,'prod_user');
			$d_3 = $this->M_user->edit_data($where,'prod_user')->row(); 
			$cek_3 = $data_3->num_rows();

			if($cek_1 > 0){
				$session_1 = array('nrp_admin' => $d_1->nrp,'username_admin' => $d_1->username,'nama_admin' => $d_1->nama,'status_admin' =>'login_admin');
				$this->session->set_userdata($session_1);
				redirect(base_url().'admin');
			}else if($cek_2 > 0){
				$session_2 = array('nrp_mtn' => $d_2->nrp,'username_mtn' => $d_2->username,'nama_mtn' => $d_2->nama,'status_mtn' =>'login_mtn');
				$this->session->set_userdata($session_2);
				redirect(base_url().'mtn');
			}else if($cek_3 > 0){
				$session_3 = array('nrp_prod' => $d_3->nrp,'username_prod' => $d_3->username,'nama_prod' => $d_3->nama,'status_prod' =>'login_prod');
				$this->session->set_userdata($session_3);
				redirect(base_url().'prod');
			}else{
				$this->session->set_flashdata('alert','Login Gagal! Username atau Password Salah');
				redirect(base_url());
			}

		}else{
			$this->session->set_flashdata('alert','Anda Belum Mengisi Username Atau Password');
			redirect(base_url());
		}
	}

	public function logout_admin()
	{
		$this->session->unset_userdata(array(
			'nrp_admin', 
			'username_admin',
			'nama_admin',
			'status_admin'
		));
		$this->session->set_flashdata('alert','Anda Sudah Logout');
		redirect(base_url());		
	}

	public function logout_mtn()
	{
		$this->session->unset_userdata(array(
			'nrp_mtn', 
			'username_mtn',
			'nama_mtn',
			'status_mtn'
		));
		$this->session->set_flashdata('alert','Anda Sudah Logout');
		redirect(base_url());		
	}

	public function logout_prod()
	{
		$this->session->unset_userdata(array(
			'nrp_prod', 
			'username_prod',
			'nama_prod',
			'status_prod'
		));
		$this->session->set_flashdata('alert','Anda Sudah Logout');
		redirect(base_url());		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */