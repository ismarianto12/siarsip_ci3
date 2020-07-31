
<div class='col-lg-12'>
    <div class='widget'>
    <div class='callout callout-info'>
        <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
  <div class='widget-body'> 
    
     ** ) Jangan ada form kosong ;

      <div class='form-title'><h3><?= $judul ?></h3></div>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Agenda <?php echo form_error('no_agenda') ?></label>
            <input type="text" class="form-control" name="no_agenda" id="no_agenda" placeholder="No Agenda" value="<?php echo $no_agenda; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Surat <?php echo form_error('jenis_surat') ?></label>
            <input type="text" class="form-control" name="jenis_surat" id="jenis_surat" placeholder="Jenis Surat" value="<?php echo $jenis_surat; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tanggal Kirim <?php echo form_error('tanggal_kirim') ?></label>
            <input type="text" class="form-control" name="tanggal_kirim" id="tanggal_kirim" placeholder="Tanggal Kirim" value="<?php echo $tanggal_kirim; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tanggal Terima <?php echo form_error('tanggal_terima') ?></label>
            <input type="text" class="form-control" name="tanggal_terima" id="tanggal_terima" placeholder="Tanggal Terima" value="<?php echo $tanggal_terima; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Surat <?php echo form_error('no_surat') ?></label>
            <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No Surat" value="<?php echo $no_surat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pengirim <?php echo form_error('pengirim') ?></label>
            <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" value="<?php echo $pengirim; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Perihal <?php echo form_error('perihal') ?></label>
            <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" value="<?php echo $perihal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama File <?php echo form_error('nama_file') ?></label>
            <input type="text" class="form-control" name="nama_file" id="nama_file" placeholder="Nama File" value="<?php echo $nama_file; ?>" />
        </div>
	    <input type="hidden" name="id_pengajuan_s" value="<?php echo $id_pengajuan_s; ?>" /> 
	    <button type="submit" class="btn btn-primary shiny"><i class='fa fa-save'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengajuan_surat_masuk') ?>" class="btn btn-warning shiny"><i class='fa fa-share'></i>Cancel</a>
	</form> 
</div></div>