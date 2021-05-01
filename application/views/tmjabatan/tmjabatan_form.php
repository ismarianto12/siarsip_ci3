
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
            <label for="varchar" class='control-label col-md-3'><b>Title<?php echo form_error('Title') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="Title" id="Title" placeholder="Title" value="<?php echo $Title; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Description<?php echo form_error('Description') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="Description" id="Description" placeholder="Description" value="<?php echo $Description; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Stat<?php echo form_error('Stat') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="Stat" id="Stat" placeholder="Stat" value="<?php echo $Stat; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="longtext" class='control-label col-md-3'><b>OtherString<?php echo form_error('OtherString') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="OtherString" id="OtherString" placeholder="OtherString" value="<?php echo $OtherString; ?>" />
        </div>
    </div>
	    <input type="hidden" name="Id" value="<?php echo $Id; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tmjabatan') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

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
