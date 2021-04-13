<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_work_request extends CI_Model {

	public function getMesinById($id){
		$sql = "select * from data_mesin M, section S where M.id_section=S.id_section and M.no_mesin='$id'";
		return $this->db->query($sql)->row_array();
	}

	public function getAllWR() 
	{
		return $query = $this->db->get('work_request')->result_array();
	}

	public function getWrById($no_wr){
		$sql = "select * from work_request W, data_mesin M, karyawan_prod P where W.no_mesin=M.no_mesin and W.nrp_prod=P.nrp_prod and W.no_wr='$no_wr'";
		return $this->db->query($sql)->row_array();
	}

	public function getWrSelesaiById($no_wr){
		$sql = "select * from work_request W, work_request_dikerjakan R, work_request_selesai S, data_mesin M, karyawan_prod P, karyawan_mtn K where W.no_wr= R.no_wr and W.no_wr=S.no_wr and W.no_mesin=M.no_mesin and W.nrp_prod=P.nrp_prod and S.nrp_mtn=K.nrp_mtn and W.no_wr='$no_wr'";
		return $this->db->query($sql)->row_array();
	}

	public function getWrNew()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_wr = date('Y-m-d');
		$status = 'BARU';

		$sql = "work_request W where W.tanggal_wr='$tanggal_wr' and W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function getWrDikerjakan()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_wr = date('Y-m-d');
		$status = 'DIKERJAKAN';

		$sql = "work_request W where W.tanggal_wr='$tanggal_wr' and W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function getWrSelesai()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_selesai_wr = date('Y-m-d');
		$status = 'SELESAI';

		$sql = "work_request W, work_request_selesai S where W.no_wr=S.no_wr and S.tanggal_selesai='$tanggal_selesai_wr' and W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function getWrPending()
	{

		$status = 'PENDING';

		$sql = "work_request W where W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function getWrPendingDikerjakan()
	{

		$status = 'DIKERJAKAN';

		$sql = "work_request W where W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function getWrRekapSelesai()
	{

		$status = 'SELESAI';

		$sql = "work_request W where W.status='$status'";
		return $this->db->get($sql)->num_rows();

	}

	public function WrNew()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_wr = date('Y-m-d');
		$status = 'BARU';

		$sql = "select * from work_request W, data_mesin D, karyawan_prod P where W.no_mesin=D.no_mesin and W.nrp_prod=P.nrp_prod and W.tanggal_wr='$tanggal_wr' and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrDikerjakan()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_dikerjakan = date('Y-m-d');
		$status = 'DIKERJAKAN';

		$sql = "select * from work_request W, work_request_dikerjakan R, data_mesin D, karyawan_mtn M where W.no_wr=R.no_wr and W.no_mesin=D.no_mesin and R.nrp_mtn=M.nrp_mtn and R.tanggal_dikerjakan='$tanggal_dikerjakan' and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrPendingDikerjakan()
	{
		$status = 'DIKERJAKAN';

		$sql = "select * from work_request W, work_request_dikerjakan R, data_mesin D, karyawan_mtn M where W.no_wr=R.no_wr and W.no_mesin=D.no_mesin and R.nrp_mtn=M.nrp_mtn and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrDiselesaikan()
	{
		date_default_timezone_set('Asia/Jakarta');

		$tanggal_selesai = date('Y-m-d');
		$status = 'SELESAI';

		$sql = "select * from work_request W, work_request_selesai S, data_mesin D, karyawan_mtn M where W.no_wr=S.no_wr and W.no_mesin=D.no_mesin and S.nrp_mtn=M.nrp_mtn and S.tanggal_selesai='$tanggal_selesai' and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrRekapSelesai()
	{
		$status = 'SELESAI';

		$sql = "select * from work_request W, work_request_selesai S, data_mesin D, karyawan_mtn M where W.no_wr=S.no_wr and W.no_mesin=D.no_mesin and S.nrp_mtn=M.nrp_mtn and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrPending()
	{
		$status = 'PENDING';

		$sql = "select * from work_request W, data_mesin D, karyawan_prod P where W.no_mesin=D.no_mesin and W.nrp_prod=P.nrp_prod and W.status='$status'";
		return $this->db->query($sql)->result_array();

	}

	public function WrRekapHarian($tanggal_wr,$shift_wr)
	{
		$status = 'SELESAI';

		$sql = "select * from work_request W, work_request_dikerjakan K, work_request_selesai S, data_mesin D, karyawan_mtn M, karyawan_prod P where W.no_wr=K.no_wr and W.no_wr=S.no_wr and W.no_mesin=D.no_mesin and W.nrp_prod=P.nrp_prod and S.nrp_mtn=M.nrp_mtn and W.status='$status' and S.tanggal_selesai='$tanggal_wr' and M.shift='$shift_wr'";
		return $this->db->query($sql)->result_array();

	}

	public function WrRekap()
	{

		$sql = "select * from work_request W, work_request_dikerjakan K, work_request_selesai S, data_mesin D, karyawan_mtn M, karyawan_prod P where W.no_wr=K.no_wr and W.no_wr=S.no_wr and W.no_mesin=D.no_mesin and W.nrp_prod=P.nrp_prod and S.nrp_mtn=M.nrp_mtn order by W.tanggal_wr";
		return $this->db->query($sql)->result_array();

	}

	public function tambahDataWR()
	{
		date_default_timezone_set('Asia/Jakarta');

		$data = [
			"no_wr" => $this->input->post('no_wr', true), // nama_fieid_database => post('nama_variabel_kirim')
			"tanggal_wr" => date('Y-m-d'),
			"jam_wr" => date('H:i:s'),
			"no_mesin" => $this->input->post('no_mesin', true),
			"problem" => $this->input->post('problem', true),
			"nrp_prod" => $this->input->post('pic_prod', true),
			"status" => 'BARU',
		];

		$this->db->insert('work_request', $data);
	}

	public function setWrDikerjakan()
	{
		$data = [
			"no_wr" => $this->input->post('no_wr', true), // nama_fieid_database => post('nama_variabel_kirim')
			"tanggal_dikerjakan" => date('Y-m-d'),
			"jam_dikerjakan" => date('H:i:s'),
			"nrp_mtn" => $this->input->post('pic_mtn') 
		];

		$this->db->insert('work_request_dikerjakan', $data);

		$status =[

			"status" => 'DIKERJAKAN',
		];

		$this->db->where('no_wr', $this->input->post('no_wr'));
		$this->db->update('work_request', $status);
	}

	public function setWrDiselesaikan()
	{
		$data = [
			"no_wr" => $this->input->post('no_wr', true), // nama_fieid_database => post('nama_variabel_kirim')
			"tanggal_selesai" => date('Y-m-d'),
			"jam_selesai" => date('H:i:s'),
			"detail_penyebab" => $this->input->post('penyebab'),
			"penyelesaian" => $this->input->post('penyelesaian'),
			"nrp_mtn" => $this->input->post('pic_mtn') 
		];

		$this->db->insert('work_request_selesai', $data);

		$status =[

			"status" => 'SELESAI',
		];

		$this->db->where('no_wr', $this->input->post('no_wr'));
		$this->db->update('work_request', $status);

		$status_mesin =[

			"status" => 'OK',
		];

		$this->db->where('no_mesin', $this->input->post('no_mesin'));
		$this->db->update('data_mesin', $status_mesin);
	}

	public function updateStatusMesin(){

		$data =[

			"status" => 'UNDER REPAIR',
		];

		$this->db->where('no_mesin', $this->input->post('no_mesin'));
		$this->db->update('data_mesin', $data);
	}

	public function setWrPending($no_wr){

		$data =[

			"status" => 'PENDING',
		]; 

		$this->db->where('no_wr', $no_wr);
		$this->db->update('work_request', $data);
	}

	public function setWrKerjaPending($no_wr)
	{

		$this->db->where('no_wr',$no_wr);
		$this->db->delete('work_request_dikerjakan');
	}

	public function no_wr($id)
	{
		$this->db->select('RIGHT(work_request.no_wr,2) as no_wr', FALSE);
		$this->db->order_by('no_wr','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('work_request');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Ymd');

		$wr = "WR-".$date."-".$id;  //format kode
		return $wr;
	}
}
/* End of file M_work_request.php */
/* Location: ./application/models/M_work_request.php */