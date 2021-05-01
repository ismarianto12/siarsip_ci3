<?php  

header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=Rekap-Arsip-".$dari."-S/d-".$sampai.".xls");
header("Expires:0");
header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
header("Pragma: public");
?>
<style>
table,font { font-family:'Calibri'; line-height:100%; }
.header,ttl{ font-family:'Calibri'; font-size:14px; line-height:90%; }
.garis {height:0px; line-height:0px;}
.text{
  mso-number-format:"\@";/*force text*/
}
</style>
<table border="1">
   <tr><td colspan="10"><center><h3>REKAP DATA LAPORAN ARSIP <?= strtoupper(identitas('nama_instansi')) ?></h3></center></td></tr>
      <tr><td colspan="10" style="border-top: 3px solid #0000"><center><small> <?= strtoupper(identitas('alamat_lengkap')) ?></small></center></td></tr>
  </table>
 <table class=bsc cellpadding="0" cellspacing="0" border="1">
  <thead>
    <tr>
      <th>#</th>
      <th>Jenis Arsip</th>
      <th>Nama Arsip</th>
      <th>File Arsip</th>
      <th>Jumlah Arsip</th>
      <th>Satuan Arsip</th>
      <th>Lokasi</th>
      <th>Ket Isi</th>
      <th>Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data->result_array() as $dt): ?>   
    <tr>
      <td><?= $no ?></td>
      <td><?= $dt['jenis_arsip'] ?></td>
      <td><?= $dt['nama_arsip'] ?></td>
      <td><a href="<?= base_url('assets/arsip/'.$dt['file_arsip']) ?>" class="btn bg-navy btn-flat margin"><?= $dt['file_arsip'] ?></a></td>
      <td><?= $dt['jumlah'] ?></td>
      <td><?= $dt['nama_satuan'] ?></td>
      <td><?= $dt['nama_lokasi'] ?></td>
      <td><?= $dt['ket_isi'] ?></td>
      <td><?= tgl_indonesia($dt['tanggal']) ?></td>
    </tr>

    <?php $no++; endforeach;


    ?>    
  </tbody>

</table>