<?php 

/**
 * 
 */
class Grafik extends CI_controller
{
	
	function __construct()
	{
		parent::__construct(); 
		login_access(); 
		$this->load->model('Grafik_model');
	}

	function index(){  
		$x['judul'] = 'Grafik'; 
		$x['grafik_surat_masuk'] = $this->Grafik_model->grafik_surat_masuk();
 		$this->template->load('template','grafik',$x);

	}
}