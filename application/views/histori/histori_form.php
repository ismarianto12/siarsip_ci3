
   <div class='row'>
                    <div class='col-md-12'>
                        <div class='box-default'>
                            <div class='panel-heading'><i class="fa fa-document"></i><?= ucfirst($judul) ?></div>
<div class='panel-wrapper collapse in' aria-expanded='true'>
                        <div class='panel-body'>
                        <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
    <div class='form-body'> 
     ** ) Harap Isikan data yang di butuhkan pada form.
     <br /><br /><br /><br /> 
	 <div class="form-group">
            <label for="int" class='control-label col-md-3'><b>Id User<?php echo form_error('id_user') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Url<?php echo form_error('url') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $url; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Aktivitasi<?php echo form_error('aktivitasi') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="aktivitasi" id="aktivitasi" placeholder="Aktivitasi" value="<?php echo $aktivitasi; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="date" class='control-label col-md-3'><b>Tanggal<?php echo form_error('tanggal') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Ip Address<?php echo form_error('ip_address') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Browser<?php echo form_error('browser') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="browser" id="browser" placeholder="Browser" value="<?php echo $browser; ?>" />
        </div>
    </div>
	    <input type="hidden" name="id_histori" value="<?php echo $id_histori; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('histori') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

       </div>
    </div>
   </div>
 </div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>
