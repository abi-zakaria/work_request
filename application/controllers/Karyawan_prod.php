<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_prod extends CI_Controller {

	public function __construct()  
	{ 
		parent::__construct();
		$this->load->model('M_kry_prod');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['karyawan_prod'] = $this->M_kry_prod->getAllKaryawanPROD();
		$data['judul'] = 'Data Karyawan Produksi';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/data_karyawan_prod',$data);
		$this->load->view('templates/footer');	
	}

	public function tambah_karyawan_prod()
	{

		$data['section'] = $this->M_kry_prod->getAllSection();
		$data['judul'] = 'Tambah Data Karyawan PROD';
		$karyawan_prod = $this->M_kry_prod;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan_prod->rules());

          if ($validation->run()) {
            $cek = $this->M_kry_prod->cek_data(array('nrp_prod' => $this->input->post('nrp')), 'karyawan_prod')->num_rows();
            if ($cek > 0) {
                $this->session->set_flashdata('flash_cek', 'Sudah Ada !');
                redirect('karyawan_prod/tambah_karyawan_prod');
            }
            $karyawan_prod->tambahDataKaryawanPROD();
            $this->session->set_flashdata('flash_kry_prod', 'Karyawan Poduksi Ditambahkan');
            redirect('karyawan_prod/tambah_karyawan_prod');	
        }

        $this->load->view('templates/header',$data);
		$this->load->view('admin/tambah_data_karyawan_prod',$data);
		$this->load->view('templates/footer');	

	}

	 public function update_karyawan_prod($id = null) 
    {

        if (!isset($id)) redirect('karyawan_prod/index');

        $data['judul'] = 'Update Data Karyawan PROD';
        $data['section'] = $this->M_kry_prod->getAllSection();
        $karyawan_prod = $this->M_kry_prod;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan_prod->rules());

        if ($validation->run()) {
            $karyawan_prod->updateDataKaryawanPROD();
            $this->session->set_flashdata('flash_kry_prod', 'Karyawan PROD Di Update');
            redirect('karyawan_prod/index');
        }

        $data["karyawan_prod"] = $karyawan_prod->getById($id);
        if (!$data["karyawan_prod"]) show_404();
        
        
        $this->load->view('templates/header',$data);
		$this->load->view('admin/update_data_karyawan_prod',$data);
		$this->load->view('templates/footer');	
	}


	 public function hapusKryPROD($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_kry_prod->hapusKryPROD($id)) {
        	$this->session->set_flashdata('flash_kry_prod','Karyawan PROD Berhasil Dihapus');
            redirect('karyawan_prod/index');
        }
    }

     public function cetak_kry_mtn_pdf()
    {


        ob_start();
        $data['data_kry_prod'] = $this->M_kry_mtn->getAllKaryawanPROD2();
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