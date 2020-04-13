<?php 

 /**
  * 
  */
 class Laporan_surat_Model extends CI_Model
 {

 	public $tsuratkeluar = 'tbl_surat_keluar';
 	public $tsuratmasuk = 'tbl_surat_masuk';

  function laporan_json_masuk(){
     $dari = $this->input->post('dari');
     $sampai = $this->input->post('sampai');

     $this->datatables->select('id_surat,no_agenda,no_surat,asal_surat,isi,kode,indeks,tgl_surat,tgl_diterima,file,keterangan,id_user,disposisi');
     $this->datatables->from('tbl_surat_masuk');
        //add this line for join
     if($dari != '' AND $sampai !=''){
       $this->datatables->where('tgl_diterima >=',$dari);
       $this->datatables->where('tgl_diterima <=',$sampai);	 
     } 
     return $this->datatables->generate();
  }

  function laporan_json_keluar(){
	$dari = $this->input->post('dari');
	$sampai = $this->input->post('sampai');

       $this->datatables->select(' 
            a.id_surat,
            a.no_agenda,
            a.id_jenis_surat,
            a.tujuan,
            a.no_surat,
            a.isi,
            a.kode,
            a.tgl_surat,
            a.tgl_catat,
            a.file,
            a.keterangan,
            a.id_user,

            b.id_jenis,
            b.nama_jenis,
            b.id_user,
            b.tanggal_create 
            ');
       $this->datatables->from('tbl_surat_keluar a');
       $this->datatables->join('jenis_surat b','b.id_jenis=a.id_jenis_surat','left');
       
       if($dari != '' AND $sampai !=''){
       	$this->datatables->where('tgl_diterima >=',$dari);
       	$this->datatables->where('tgl_diterima <=',$sampai);	 
       }
       return $this->datatables->generate(); 
  }

 }