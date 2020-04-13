
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
                            <label for="varchar" class='control-label col-md-3'><b>No Disposisi<?php echo form_error('no_disposisi') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="no_disposisi" id="no_disposisi" placeholder="No Disposisi" value="<?php echo $no_disposisi; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>No Agenda<?php echo form_error('no_agenda') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="no_agenda" id="no_agenda" placeholder="No Agenda" value="<?php echo $no_agenda; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>No Surat<?php echo form_error('no_surat') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No Surat" value="<?php echo $no_surat; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kepada" class='control-label col-md-3'><b>Kepada<?php echo form_error('kepada') ?></b></label>

                            <div class='col-md-9'>
                                <textarea class="form-control" rows="3" name="kepada" id="kepada" placeholder="Kepada"><?php echo $kepada; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>

                            <div class='col-md-9'>
                                <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Status Surat<?php echo form_error('status_surat') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="status_surat" id="status_surat" placeholder="Status Surat" value="<?php echo $status_surat; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan" class='control-label col-md-3'><b>Tanggapan<?php echo form_error('tanggapan') ?></b></label>

                            <div class='col-md-9'>
                                <textarea class="form-control" rows="3" name="tanggapan" id="tanggapan" placeholder="Tanggapan"><?php echo $tanggapan; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="timestamp" class='control-label col-md-3'><b>Waktu<?php echo form_error('waktu') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="waktu" id="waktu" placeholder="Waktu" value="<?php echo $waktu; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="enum" class='control-label col-md-3'><b>Ket Surat<?php echo form_error('ket_surat') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="ket_surat" id="ket_surat" placeholder="Ket Surat" value="<?php echo $ket_surat; ?>" />
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
