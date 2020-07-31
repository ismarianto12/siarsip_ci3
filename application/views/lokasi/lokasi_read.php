 
<div class='col-lg-12'>
<div class='widget'>
    <div class='callout callout-info'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
        <div class='form-title'><h2 style="margin-top:0px"><?= ucfirst($judul) ?> : Detail </h2></div>
        <table class="table">
	    <tr><td>Nama Lokasi</td><td><?php echo $nama_lokasi; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('lokasi') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>