 
<div class='col-lg-12'>
<div class='widget'>
    <div class='widget-header bg-blue'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
        <div class='form-title'><h2 style="margin-top:0px"><?= ucfirst($judul) ?> : Detail </h2></div>
        <table class="table">
	    <tr><td>No Agenda</td><td><?php echo $no_agenda; ?></td></tr>
	    <tr><td>jenis_surat</td><td><?php echo $jenis_surat; ?></td></tr>
	    <tr><td>Tanggal Kirim</td><td><?php echo $tanggal_kirim; ?></td></tr>
	    <tr><td>Tanggal Terima</td><td><?php echo $tanggal_terima; ?></td></tr>
	    <tr><td>No Surat</td><td><?php echo $no_surat; ?></td></tr>
	    <tr><td>Pengirim</td><td><?php echo $pengirim; ?></td></tr>
	    <tr><td>Perihal</td><td><?php echo $perihal; ?></td></tr>
	    <tr><td>Nama File</td><td><?php echo $nama_file; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengajuan_surat_masuk') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>