 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Title</td><td><?php echo $Title; ?></td></tr>
	    <tr><td>Description</td><td><?php echo $Description; ?></td></tr>
	    <tr><td>Stat</td><td><?php echo $Stat; ?></td></tr>
	    <tr><td>OtherString</td><td><?php echo $OtherString; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tmjabatan') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>