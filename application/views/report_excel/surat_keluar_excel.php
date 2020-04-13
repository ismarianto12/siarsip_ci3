<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=Rekap_laporan_surat_keluar.xls");
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


<table class="table" id="datatables">
  <thead>
    <tr>
      <th width="80px">No</th>
      <th>No Agenda</th>
      <th>Tanggal Surat</th>
      <th>Tujuan</th>
      <th>Kode Surat</th>
      <th>Keterangan</th> 
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data->result_array() as  $keluar): ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $keluar['no_agenda'] ?></td>
      <td><?= $keluar['tgl_surat'] ?></td>
      <td><?= $keluar['tujuan'] ?></td>
      <td><?= $keluar['kode'] ?></td>
      <td><?= $keluar['keterangan'] ?></td>  
    </tr> 
  <?php endforeach ?>
</tbody> 
</table> 