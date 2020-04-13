<?php  

/**
 * 
 */
class Laporan_surat extends CI_controller{
	
	function __construct()
	{ 
		require_once APPPATH.'third_party/fpdf.php';  
		parent::__construct();
		login_access();
		hak_akses();
        
        $this->load->library('Datatables');
		$this->load->model('Laporan_surat_Model');
		$this->load->library('form_validation');
	}

	function surat_masuk(){  
		$x =array('judul'=>'Data Laporan Surat');
		$this->template->load('template','laporan_surat/laporan_surat_masuk',$x);
	} 

	function surat_keluar(){
		$x =array('judul'=>'Data Laporan Surat');
		$this->template->load('template','laporan_surat/laporan_surat_keluar',$x);
		
	}


	/*funtion json data*/
	function json_laporan_masuk(){
		echo $this->Laporan_surat_Model->laporan_json_masuk();
	}

	function json_laporan_keluar(){
		echo $this->Laporan_surat_Model->laporan_json_keluar();

	}
 
 
	}