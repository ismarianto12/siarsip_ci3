<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=Rekap_laporan_surat_masuk.xls");
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
      <th>Asal Surat</th>
      <th>Tanggal terima</th>
      <th>Nomor Surat</th>
      <th>Disposisi</th> 
      <th>Nama File</th> 
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data->result_array() as  $masuk): ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $masuk['no_agenda'] ?></td>
      <td><?= $masuk['asal_surat'] ?></td>
      <td><?= $masuk['tgl_diterima'] ?></td>
      <td><?= $masuk['no_surat'] ?></td>
      <td><?= ($masuk['disposisi'] == 'y') ? 'Disposisi' : 'Belum Disposisi' ?></td>  
      <td><a href="<?= base_url('assets/file_surat/'.$masuk['file']) ?>" target="_blank" class="btn btn-primary">Detail File Surat.</a></td> 
    </tr>
    <?php $no++; endforeach ?>
  </tbody>
</table>