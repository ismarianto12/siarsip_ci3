<?php
 class Laporan_arsip extends CI_controller
 {
 	
 	function __construct()
 	{
 	   parent::__construct();
     login_access();
     $this->load->model('M_laporan'); 
 	} 
 	function index(){
    catat_log($this->session->id_user,$_SERVER['REQUEST_URI'],'Akses laporan arsip.',$_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT']);
    $x['jenis_arsip'] = $this->db->get('jenis_arsip');
  	if (isset($_POST['kirim'])) {
		$dari = $this->input->post('dari');
		$sampai =$this->input->post('sampai');
    $jenis_arsip= $this->input->post('id_jenis');
		$x['data'] = $this->M_laporan->arsip($dari,$sampai,$jenis_arsip);
	    $x['judul'] = 'Data laporan arsip';
        $this->template->load('template','l_arsip',$x);
    }else{ 
		$x['judul'] = 'Data laporan arsip';
 
		$this->template->load('template','l_arsip',$x);		
	}
   }

   function excel($dari,$sampai,$jenis=''){
   	$cek=$this->M_laporan->arsip($dari,$sampai,$jenis='');
   	if ($cek->num_rows() > 0) { 
   		$x['dari'] =$dari;
   		$x['sampai'] =$sampai;
      $x['jenis'] = $jenis;
   		$x['data'] = $this->M_laporan->arsip($dari,$sampai,$jenis='');
   		$this->load->view('l_arsip_excel',$x);
   	}else{
   		echo "Eror tokent miscmatch";
   	}
   } 


   function pdf($dari,$sampai,$jenis=''){
    require_once APPPATH.'third_party/fpdf.php';  

   	$cek=$this->M_laporan->arsip($dari,$sampai);
   	if ($cek->num_rows() > 0) { 
   		$data = $this->M_laporan->arsip($dari,$sampai);
      $logo = (file_exists("./assets/img/".logo()))? "assets/img/".logo() : "assets/img/no_image.png"; 
      $pdf = new FPDF('l','mm','A5');
      $pdf->AddPage();
      $pdf->Image($logo,150,10,20);
      $pdf->Cell(190,7,'',0,1,'C');
      $pdf->SetFont('Arial','B',16);
      $pdf->Cell(190,7,strip_tags(strtoupper(identitas('nama_instansi'))),0,1,'C');
      $pdf->SetFont('Arial','B',9);
      $pdf->Cell(190,7,strip_tags(strtoupper(identitas('alamat_lengkap'))),0,1,'C');
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(190,7,'Tepl : '.strip_tags(strtoupper(identitas('telp'))).', Fax : '.strip_tags(strtoupper(identitas('fax'))),0,1,'C');

      $pdf->Line(20, 30, 190, 30);
      $pdf->SetFont('Arial','i',9);
      $pdf->Cell(190,7,'Laporan Rekap Data Laporan Arsip Tanggal :'.tgl_indonesia($dari).' S/d '.tgl_indonesia($sampai),0,1,'C');
      if($jenis !=''){ 
       $djenis= $this->db->get_where('jenis_arsip',array('id_jenis'=>$jenis))->row_array();
       $nama_jenis = $djenis['jenis_arsip'];
       $pdf->cell(200,7,'Jenis arsip yang di pilih :'.$nama_jenis,0,1,'C');
      }else{
      }
      $pdf->Cell(10,10,'',0,1);  
      $pdf->SetFont('Arial','B',8); 

            $pdf->Cell(10,6,'No',1,0);
            $pdf->Cell(30,6,'Jenis Arsip',1,0); 
            $pdf->Cell(30,6,'Nama Arsip',1,0);
            $pdf->Cell(25,6,'Jumlah',1,0);
            $pdf->Cell(30,6,'Satuan',1,0);
            $pdf->Cell(35,6,'Lokasi',1,0);
            $pdf->Cell(20,6,'Ket',1,0);  
            $pdf->Cell(20,6,'Tanggal',1,1);  
            $no= 1;
            foreach ($data->result_array() as $keluar){
             $pdf->SetFont('Arial','',8); 
              $pdf->Cell(10,6,$no,1,0);
              $pdf->Cell(30,6,$keluar['jenis_arsip'],1,0); 
              $pdf->Cell(30,6,$keluar['nama_arsip'],1,0);
              $pdf->Cell(25,6,$keluar['jumlah'],1,0);
              $pdf->Cell(30,6,$keluar['nama_satuan'],1,0);
              $pdf->Cell(35,6,$keluar['lokasi'],1,0); 
              $pdf->Cell(20,6,$keluar['keterangan'],1,0); 
              $pdf->Cell(20,6,$keluar['tanggal'],1,1);  
          $no++;
        }     


      $pdf->Output();


   	}else{
   		echo "Eror tokent miscmatch";
   	}
   } 

 }
