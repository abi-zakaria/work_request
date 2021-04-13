<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_excel extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array('M_mesin','M_kry_mtn','M_kry_prod','M_section'));
	}

	public function export_data_mesin()
	{
		
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    // Panggil class PHPExcel nya
		$excel = new PHPExcel();
    // Settingan awal fil excel
		$excel->getProperties()->setCreator('My Notes Code')
		->setLastModifiedBy('My Notes Code')
		->setTitle("Data Mesin PT.NOK INDONESIA")
		->setSubject("Mesin")
		->setDescription("Laporan Semua Data Mesin")
		->setKeywords("Data Mesin");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
  );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
			'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
			'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
		);
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA MESIN"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:G1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NO.MESIN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA MESIN"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "WORK CENTER"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "ID.SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "STATUS"); // Set kolom E3 dengan tulisan "ALAMAT"
    
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $mesin = $this->M_mesin->getAllMesin2();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($mesin as $data){ // Lakukan looping pada variabel siswa
    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
    	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['no_mesin']);
    	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['nama_mesin']);
    	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['work_center']);
    	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['id_section']);
    	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['section']);
    	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['status']);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
  }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom F
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Mesin");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Mesin.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
}

public function export_data_kry_mtn()
{

	include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    // Panggil class PHPExcel nya
	$excel = new PHPExcel();
    // Settingan awal fil excel
	$excel->getProperties()->setCreator('My Notes Code')
	->setLastModifiedBy('My Notes Code')
	->setTitle("Data Karyawan MTN PT.NOK INDONESIA")
	->setSubject("Karyawan MTN")
	->setDescription("Laporan Semua Data Karyawan MTN")
	->setKeywords("Data Karyawan MTN");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
	$style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
  );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	$style_row = array(
		'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
		'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
	);
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA KARYAWAN MTN"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:G1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NRP"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA KARYAWAN"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "SHIFT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "JABATAN"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "ID.SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $kry_mtn = $this->M_kry_mtn->getAllKaryawanMTN2();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($kry_mtn as $data){ // Lakukan looping pada variabel siswa
    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
    	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nrp_mtn);
    	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_karyawan_mtn);
    	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->shift);
    	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->jabatan);
    	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->id_section);
    	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->section);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
  }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom F
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Karyawan MTN");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Kry Mtn.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
}

public function export_data_kry_prod()
{

	include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    // Panggil class PHPExcel nya
	$excel = new PHPExcel();
    // Settingan awal fil excel
	$excel->getProperties()->setCreator('My Notes Code')
	->setLastModifiedBy('My Notes Code')
	->setTitle("Data Karyawan MTN PT.NOK INDONESIA")
	->setSubject("Karyawan MTN")
	->setDescription("Laporan Semua Data Karyawan MTN")
	->setKeywords("Data Karyawan MTN");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
	$style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
  );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	$style_row = array(
		'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
		'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
	);
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA KARYAWAN PROD"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:G1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NRP"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA KARYAWAN"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "SHIFT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "JABATAN"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "ID.SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "SECTION"); // Set kolom E3 dengan tulisan "ALAMAT"
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $kry_prod = $this->M_kry_prod->getAllKaryawanPROD2();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($kry_prod as $data){ // Lakukan looping pada variabel siswa
    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
    	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nrp_prod);
    	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_karyawan);
    	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->shift);
    	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->jabatan);
    	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->id_section);
    	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->section);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
  }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom F
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Karyawan PROD");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Kry Prod.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
}

public function export_data_section()
{

	include APPPATH.'third_party/PHPExcel/PHPExcel.php';

    // Panggil class PHPExcel nya
	$excel = new PHPExcel();
    // Settingan awal fil excel
	$excel->getProperties()->setCreator('My Notes Code')
	->setLastModifiedBy('My Notes Code')
	->setTitle("Data Section PT.NOK INDONESIA")
	->setSubject("Section")
	->setDescription("Laporan Semua Data Section")
	->setKeywords("Data Section");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
	$style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
  );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
	$style_row = array(
		'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
    ),
		'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
    )
	);
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SECTION"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:d1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "ID.SECTION"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA SECTION"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "DEPARTEMEN");
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $section = $this->M_section->getAllSection2();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($section as $data){ // Lakukan looping pada variabel siswa
    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
    	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id_section);
    	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->section);
    	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->departemen);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
    	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
    	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
  }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom D
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Section");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Section.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
}

}

/* End of file Cetak_excel.php */
/* Location: ./application/controllers/Cetak_excel.php */