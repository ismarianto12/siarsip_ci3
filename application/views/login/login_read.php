 
<div class='col-lg-12'>
<div class='widget'>
    <div class='widget-header bg-blue'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
  	
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr> 
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Log</td><td><?php echo $log; ?></td></tr>
	    <tr><td>Aktif</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('login') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>