 
<div class='col-lg-12'>
<div class='widget'>
    <div class='widget-header bg-blue'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
        <div class='form-title'><h2 style="margin-top:0px"><?= ucfirst($judul) ?> : Detail </h2></div>
        <table class="table">
	    <tr><td>Jenis Arsip</td><td><?php echo $jenis_arsip; ?></td></tr>
	    <tr><td>Create Id</td><td><?php echo $create_id; ?></td></tr>
	    <tr><td>Create Date</td><td><?php echo $create_date; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jenis_arsip') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>