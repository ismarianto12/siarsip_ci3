<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
        <h3 class='box-title m-b-0'><?= $judul ?></h3>
        <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
        <div class='table-responsive'>  
            <a href="<?= base_url('arsip/pengajuan_arsip/add') ?>" class="btn btn-success">Tambah data</a>
            <hr />
     
     <?php 
     if ($form == 'n') { 
      echo $this->session->flashdata('pesan');
      ?>
 
      <table class="table" id="datatables">
        <thead>
         <tr>
          <th>#</th>
          <th>Arsip</th>
          <th>Jumlah</th>
          <th>Di Ajukan</th>
          <th>Satuan</th>
          <th>Tanggal</th>
          <th>File</th>
          <th>Status</th>
          <?php if($this->session->level == 'admin'): ?>
            <th width="200px">Action</th>
          <?php endif ?>
        </tr>
      </thead>
      <tbody> 
        <?php $no=1;foreach($data->result_array() as  $dt): ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $dt['nama_arsip'] ?></td>
          <td><?= $dt['jumlah'] ?></td>
          <td><?= $dt['nama'] ?></td>
          <td><?= $dt['nama_satuan'] ?></td>
          <td><?= tgl_indonesia($dt['tanggal']) ?></td>
          <td>
            <?php $jenis_file = substr($dt['file_arsip'], -4);

            if($jenis_file == '.jpg' || $jenis_file == '.png'):  ?>
              <button href="<?= base_url('arsip/download_file_arip/'.$dt['id_pengajuan']) ?>" onclick="return tampil_data('<?= $dt['file_arsip'] ?>') "class="btn btn-primary  btn-xs"><?= $dt['file_arsip'] ?></button>
              <?php else: ?>

               <a href="<?= base_url('arsip/download_file_arip/'.$dt['id_pengajuan']) ?>" target="_blank" class="btn btn-primary"><i class="fa fa-list"></i>Download File</a>

             <?php endif; ?> 

           </td>
           <td><?= $dt['tujuan'] ?></td>
           <?php if($this->session->level == 'user'): ?>
            <?php elseif($this->session->level == 'admin'): ?>
              <td><a href="<?= base_url('arsip/pengajuan_arsip/edit/'.$dt['id_pengajuan']) ?>" class="btn btn-success">Edit</a> 
               <a href="<?= base_url('arsip/pengajuan_arsip/delete/'.$dt['id_pengajuan']) ?>" class="btn btn-danger">Hapus</a> 
             </td>
           <?php endif; ?>
         </tr>
         <?php $no++;endforeach; ?> 
       </tbody>
     </table>  
     <script type="text/javascript">
       function tampil_data(id){ 
        var SplitText = "Arsip Gambar"
        var $dialog = $('<div></div>')
        .html(SplitText )
        .dialog({
          height: 500,
          width: 600,
          title: 'Arsip gambar'});
        $dialog.dialog('open'); 
        $dialog.html('<img src ="<?= base_url() ?>/assets/arsip/'+id+'">');
      }
    </script>
    * ) . File arsip masih kosong harap isi untuk dapat di proses dari pengajuan arsip yang kurang.
  <?php }elseif($form == 'y'){  ?>


    <div class="alert alert-success"><tt><?= keterangan('setting') ?></tt>.</div>
    <br />
    <center><div class="alert alert-info">Pejabat pembuat pengajuan arsip saat ini atas nama : <?= $this->session->nama ?></div></center>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
       <label class="col-sm-3"><b>Nama Arsip</b></label>
       <div class="col-sm-3"><br /><input type="text" name="nama_arsip" value="<?= $nama_arsip ?>" class="form-control"></div>
     </div>

     <div class="form-group">
       <label class="col-sm-3"><b>Jumlah</b></label>
       <div class="col-sm-3"><br /><input type="text" name="jumlah" value="<?= $jumlah ?>" class="form-control" required=""></div>
     </div>

     <div class="form-group">
      <label class="col-sm-3"><b>Jenis Arsip</b></label>
      <div class="col-sm-3"><br />  
       <select class="form-control" name="id_jenis" required="">
         <option value="">Pilih Jenis Arsip</option>
         <?php foreach($this->db->get('jenis_arsip')->result_array() as $dt): ?>
         <option value="<?= $dt['id_jenis'] ?>"><?= $dt['jenis_arsip'] ?></option>
       <?php endforeach ?>
     </select> 
   </div>
 </div>


 <div class="form-group">
   <label class="col-sm-3"><b>Satuan Arsip</b></label>
   <div class="col-sm-3"><br />
    <select class="form-control" name="id_satuan" required="">
     <option value="">Satuan Arsip</option>
     <?php foreach($this->db->get('m_satuan')->result_array() as $dt): ?>
     <option value="<?= $dt['id_satuan'] ?>"><?= $dt['nama_satuan'] ?></option>
   <?php endforeach ?>
 </select> 
</div>
</div>


<div class="form-group">
  <!--  <a href="<?= base_url('assets/arsip/'.$file) ?>" class="btn btn-success"><?= $file ?></a> -->
  <label class="col-sm-3"><b>File</b> <small>ext yang di izinkan :  gif|jpg|png|jpeg|PNG|pdf|PDF|doc|docx|mp4|mp3|MP3</small></label>
  <div class="col-sm-3"><br /><input type="file" name="file_pengajuan" value="" class="form-control" required=""></div>
</div>

<div class="form-group">
 <label class="col-sm-3"><b>Tujuaun Pengajuan</b></label>
 <div class="col-sm-3">
  <br /><textarea name="tujuan" class="form-control"> <?= $tujuan ?></textarea></div>
</div>

<div class="form-group">
  <div class="col-sm-3"><button type="submit" name="kirim" class="btn btn-primary"><i class="fa fa-disk"></i>Simpan</button> <button type="reset" name="kirim" class="btn btn-danger"><i class="fa fa-disk"></i>Batal</button></div>
</div>    
</form>
<?php }elseif($form == 'detail'){  ?>

  <?= keterangan(3) ?>
  <h3>Detail data pengajuan arsip</h3>

  <table class="table table-striped">
   <tr><th>Nama Arsip</th><td><?php echo $sql->row()->nama_arsip; ?></td></tr>
   <tr><th>Jumlah /Satuan</th><td><?php echo $sql->row()->jumlah.'/'.$sql->row()->satuan; ?></td></tr>
   <tr><th>tujuan</th><td><?php echo $sql->row()->tujuan; ?></td></tr>
   <tr><th>Tanggal</th><td><?= tgl_indonesia($sql->row()->tanggal); ?></td></tr>
   <tr><th>File</th><td><?= $data = ($sql->row()->file_arsip) ? $sql->row()->file_arsip : ''; ?></td></tr>
   <tr><th>Diajukan oleh</th> <td><?= $Nm = ($sql->row()->nama) ? $sql->row()->nama : 'Tidak ada nama'; ?></td></tr>
 </table>
 <br />
 <a href="<?= base_url('arsip/pengajuan_arsip') ?>" class="btn btn-success"><i class="fa fa-share"></i>Kembali</a>

<?php } ?>
<div class="clearfix"></div>
</div>
</div>
</div> 
</div>

<script type="text/javascript">
	$(function(){
   $("#datatables").dataTable();
 });
</script>