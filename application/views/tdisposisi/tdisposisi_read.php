 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>No Disposisi</td><td><?php echo $no_disposisi; ?></td></tr>
	    <tr><td>No Agenda</td><td><?php echo $no_agenda; ?></td></tr>
	    <tr><td>No Surat</td><td><?php echo $no_surat; ?></td></tr>
	    <tr><td>Kepada</td><td><?php echo $kepada; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Status Surat</td><td><?php echo $status_surat; ?></td></tr>
	    <tr><td>Tanggapan</td><td><?php echo $tanggapan; ?></td></tr>
	    <tr><td>Waktu</td><td><?php echo $waktu; ?></td></tr>
	    <tr><td>Ket Surat</td><td><?php echo $ket_surat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tdisposisi') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>