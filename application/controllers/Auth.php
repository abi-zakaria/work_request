<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sebagai = $this->input->post('sebagai');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() != false){
			$where = array(
				'username' => $username,
				'password' => md5($password),
				'level' => $sebagai
			);

			if($sebagai == "admin"){
				$cek = $this->M_user->cek_login('user',$where)->num_rows();
				$data = $this->M_user->cek_login('user',$where)->row();

				if($cek > 0){
					$data_session = array(
						'id' => $data->id_user,
						'nrp' => $data->nrp,
						'username_admin' => $data->username,
						'status' => 'admin_login'
					);

					$this->session->set_userdata($data_session);

					redirect(base_url().'admin');
				}else{
					redirect(base_url().'home/login_admin?alert=gagal');
				}

			}else if($sebagai == "maintenance"){
				$cek = $this->M_user->cek_login('user',$where)->num_rows();
				$data = $this->M_user->cek_login('user',$where)->row();

				if($cek > 0){
					$data_session = array(
						'id' => $data->id_user,
						'nrp' => $data->nrp,
						'username' => $data->username,
						'status' => 'mtn_login'
					);

					$this->session->set_userdata($data_session);

					redirect(base_url().'mtn');
				}else{
					redirect(base_url().'home/login_mtn?alert=gagal');
				}

			}else if($sebagai == "produksi"){
				$cek = $this->M_user->cek_login('user',$where)->num_rows();
				$data = $this->M_user->cek_login('user',$where)->row();

				if($cek > 0){
					$data_session = array(
						'id' => $data->id_user,
						'nrp' => $data->nrp,
						'username' => $data->username,
						'status' => 'mtn_prod'
					);

					$this->session->set_userdata($data_session);

					redirect(base_url().'produksi');
				}else{
					redirect(base_url().'home/login_prod?alert=gagal');
				}
			}else{
				redirect('home');
			}
		}

	}

}	/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */