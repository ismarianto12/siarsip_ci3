<?php 
class Notifikasi_surat extends CI_controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Notifikasi_surat_model');
    }

    function jumlah_surat(){
     $data_1 = $this->Notifikasi_surat_model->jumlah_surat_masuk();
     $data_2 = $this->Notifikasi_surat_model->jumlah_surat_keluar();
     $hasil = (int)$data_1 + (int)$data_2;
     
     $j_surat = array('jumlah'=>$hasil); 
     echo json_encode($j_surat); 
   
    }


    function list_surat()
    {
     $l_surat_masuk = $this->Notifikasi_surat_model->l_surat_masuk();
     $l_surat_keluar = $this->Notifikasi_surat_model->l_surat_keluar();

     foreach($l_surat_masuk->result_array() as $entri):
         echo '<li><a href="'.base_url('tsuratmasuk').'" target="_blank"><div class="clearfix">
         <div class="notification-body">
         <span class="title">'.$entri['perihal'].'</span>      
         <span class="description"><i class="fa fa-clock-o themeprimary"></i>Tanggal surat masuk : '.tgl_indonesia($entri['tanggal_terima']).'</span></div></div></a></li>';
     endforeach;    
     foreach($l_surat_keluar->result_array() as $exit):
        echo '<li><a href="'.base_url('tsuratkeluar').'" target="_blank"><div class="clearfix">
         <div class="notification-body">
         <span class="title">'.$exit['perihal'].'</span>      
         <span class="description"><i class="fa fa-clock-o themeprimary"></i>Tanggal surat keluar : '.tgl_indonesia($exit['tanggal_kirim']).'</span></div></div></a></li>';
     endforeach;    

     // $data_surat =  array_merge($surat_masuk,$surat_keluar); 
     // echo json_encode($data_surat);  
  
    }

}