 
<div class='col-lg-12'>
<div class='widget'>
    <div class='callout callout-info'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
        <div class='form-title'><h2 style="margin-top:0px"><?= ucfirst($judul) ?> : Detail </h2></div>
        <table class="table">
	    <tr><td>Id Parent</td><td><?php echo $id_parent; ?></td></tr>
	    <tr><td>Nama Menu</td><td><?php echo $nama_menu; ?></td></tr>
	    <tr><td>Icon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>Link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>Aktif</td><td><?php echo $aktif; ?></td></tr>
	    <tr><td>Urutan</td><td><?php echo $urutan; ?></td></tr>
	    <tr><td>Position</td><td><?php echo $position; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('menu') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>