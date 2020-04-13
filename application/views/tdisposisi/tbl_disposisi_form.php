
   <div class='row'>
                    <div class='col-md-12'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'><?= ucfirst($judul) ?></div>
<div class='panel-wrapper collapse in' aria-expanded='true'>
                        <div class='panel-body'>
                        <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
    <div class='form-body'> 
     ** ) Harap Isikan data yang di butuhkan pada form.
     <br /><br /><br /><br /> 
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Tujuan<?php echo form_error('tujuan') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo $tujuan; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="mediumtext" class='control-label col-md-3'><b>Isi Disposisi<?php echo form_error('isi_disposisi') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" placeholder="Isi Disposisi" value="<?php echo $isi_disposisi; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Sifat<?php echo form_error('sifat') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="sifat" id="sifat" placeholder="Sifat" value="<?php echo $sifat; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="date" class='control-label col-md-3'><b>Batas Waktu<?php echo form_error('batas_waktu') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="batas_waktu" id="batas_waktu" placeholder="Batas Waktu" value="<?php echo $batas_waktu; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Catatan<?php echo form_error('catatan') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" value="<?php echo $catatan; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="int" class='control-label col-md-3'><b>Id Surat<?php echo form_error('id_surat') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="id_surat" id="id_surat" placeholder="Id Surat" value="<?php echo $id_surat; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="tinyint" class='control-label col-md-3'><b>Id User<?php echo form_error('id_user') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
        </div>
    </div>
	    <input type="hidden" name="id_disposisi" value="<?php echo $id_disposisi; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tdisposisi') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

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
