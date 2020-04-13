
<div class='col-lg-12'>
    <div class='widget'>
    <div class='widget-header bg-blue'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
    
     ** ) Jangan ada form kosong ;

      <div class='form-title'><h3><?= $judul ?></h3></div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Parent <?php echo form_error('id_parent') ?></label>
            <input type="text" class="form-control" name="id_parent" id="id_parent" placeholder="Id Parent" value="<?php echo $id_parent; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Menu <?php echo form_error('nama_menu') ?></label>
            <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" value="<?php echo $nama_menu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Icon <?php echo form_error('icon') ?></label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Link <?php echo form_error('link') ?></label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Aktif <?php echo form_error('aktif') ?></label>
            <input type="text" class="form-control" name="aktif" id="aktif" placeholder="Aktif" value="<?php echo $aktif; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Urutan <?php echo form_error('urutan') ?></label>
            <input type="text" class="form-control" name="urutan" id="urutan" placeholder="Urutan" value="<?php echo $urutan; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Position <?php echo form_error('position') ?></label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?php echo $position; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <input type="hidden" name="id_menu" value="<?php echo $id_menu; ?>" /> 
	    <button type="submit" class="btn btn-primary shiny"><i class='fa fa-save'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('menu') ?>" class="btn btn-warning shiny"><i class='fa fa-share'></i>Cancel</a>
	</form> 
</div></div>



 