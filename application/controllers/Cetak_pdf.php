<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_pdf extends CI_Controller { 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array('M_mesin','M_kry_mtn','M_kry_prod','M_section','M_work_request'));
		$this->load->library('Dom_pdf');
	}

	function laporan_pdf_mesin()
	{

		$data['mesin'] = $this->M_mesin->getAllMesin2();

		$this->load->view('admin/laporan_master/data_mesin_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_mesin.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_kry_mtn()
	{

		$data['kry_mtn'] = $this->M_kry_mtn->getAllKaryawanMTN2();

		$this->load->view('admin/laporan_master/data_kry_mtn_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_kry_mtn.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_kry_prod()
	{

		$data['kry_prod'] = $this->M_kry_prod->getAllKaryawanPROD2();

		$this->load->view('admin/laporan_master/data_kry_prod_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_kry_prod.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_section()
	{

		$data['section'] = $this->M_section->getAllSection2();

		$this->load->view('admin/laporan_master/data_section_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_section.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_wr($no_wr)
	{

		
		$data['detail_wr'] = $this->M_work_request->getWrById($no_wr);

		$this->load->view('produksi/laporan/work_order_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("work_request.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_wr_selesai($no_wr)
	{

		
		$data['detail_wr_selesai'] = $this->M_work_request->getWrSelesaiById($no_wr);

		$this->load->view('maintenance/laporan/work_order_selesai_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("work_request.pdf", array('Attachment'=>0));

	}

	function laporan_pdf_wr_harian()
	{
		$data['tanggal'] = $this->input->post('tgl_wo');
		
		$data['wr_harian'] = "select * from";

		$this->load->view('maintenance/laporan/work_order_harian_pdf',$data);

		$paper_size='A4';
		$orientation = 'potrait';
		$html = $this->output->get_output(); 

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("work_request.pdf", array('Attachment'=>0));

	}

	function work_req_harian_pdf()
	{
		$tanggal_wr = $this->input->get('tgl_wr');
		$shift_wr = $this->input->get('shift');
	
		$data['wr_harian'] = $this->M_work_request->WrRekapHarian($tanggal_wr,$shift_wr);

		$this->load->view('maintenance/laporan/work_order_harian_pdf',$data);

		$paper_size='A4';
		$orientation = 'Landscape';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("work_request_harian.pdf", array('Attachment'=>0));
	}

	function data_work_req_selesai_pdf()
	{
	
		$data['wr_rekap'] = $this->M_work_request->WrRekap();

		$this->load->view('maintenance/laporan/work_req_selesai_rekap',$data);

		$paper_size='A4';
		$orientation = 'Landscape';
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("work_request_harian.pdf", array('Attachment'=>0));
	}

}

/* End of file Cetak_pdf.php */
/* Location: ./application/controllers/Cetak_pdf.php */