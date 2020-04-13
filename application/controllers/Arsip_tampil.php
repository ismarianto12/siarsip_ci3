<?php 

class Arsip_tampil extends CI_Controller{

	function __construct(){ 
		parent:: __construct();
		login_access();
		//hak_akses();
		$this->load->model('Arsip_model');
		$this->load->library('form_validation');   
		$this->load->library('datatables');
	}
 
function tampil_list(){
  $data=$this->Arsip_model->pengajuan_arsip_cek($this->session->id_user);
  if ($data->num_rows() > 0) {
    foreach($data->result_array() as $sql):
        echo '<li>
        <a href="'.base_url('arsip/pengajuan_arsip/detail/'.$sql['id_pengajuan']).'">
        <div class="clearfix">
        <div class="notification-icon">
        <i class="fa fa-phone bg-themeprimary white"></i>
        </div>
        <div class="notification-body">
        <span class="title">'.strip_tags($sql['nama_arsip']).'</span>
        <span class="description">'.tgl_indonesia($sql['tanggal']).'</span>
        </div>
        <div class="notification-extra">
        <i class="fa fa-clock-o themeprimary"></i>
        <span class="description">'.strip_tags($sql['nama_arsip']).'</span>
        </div>
        </div>
        </a>
        </li>';
    endforeach;
   }else{
    echo '<li>
    <a href="'.base_url('arsip/pengajuan_arsip/').'">
    <div class="clearfix">
    <div class="notification-icon">
    <i class="fa fa-phone bg-themeprimary white"></i>
    </div>
    <div class="notification-body">
    <span class="title">Tidak ada data pengajuan</span>
    <span class="description"></span>
    </div>
    <div class="notification-extra">
    <i class="fa fa-clock-o danger"></i>
    <span class="description"></span>
    </div>
    </div>
    </a>
    </li>';
  }  
 }

 function tampil_list_jumlah(){
    $data=$this->Arsip_model->pengajuan_arsip_cek($this->session->id_user);
    echo $data->num_rows();
 }


 }