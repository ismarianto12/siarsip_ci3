<div class='row'>
    <div class='col-md-12'>
        <div class='box-default'>
            <div class='panel-heading'><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                        <div class='form-body'>
                            ** ) Harap Isikan data yang di butuhkan pada form.
                            <br /><br /><br /><br />
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nama Jenis<?php echo form_error('nama_jenis') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nama_jenis" id="nama_jenis" placeholder="Nama Jenis" value="<?php echo $nama_jenis; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b> * )Kode No Surat<?php echo form_error('kode_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kode_surat" id="kode_surat" placeholder="Kode Surat" value="<?php echo $kode_surat; ?>" />
                                </div>
                            </div>

                            <input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" />


                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                <a href="<?php echo site_url('jenis_surat') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <small> * Jika kode surat tidak ada silahkan di kosongkan.</small>
                </div>
            </div>
        </div>
    </div>
</div>