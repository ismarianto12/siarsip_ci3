<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-info'>
            <div class='panel-heading'>Data Satuan kerja</div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                        <div class='form-body'>
                            ** ) Harap Isikan data yang di butuhkan pada form.
                            <br /><br /><br /><br />
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Sikd Satker Type<?php echo form_error('sikd_satker_type') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="sikd_satker_type" id="sikd_satker_type" placeholder="Sikd Satker Type" value="<?php echo $sikd_satker_type; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Sikd Satker Id<?php echo form_error('sikd_satker_id') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="sikd_satker_id" id="sikd_satker_id" placeholder="Sikd Satker Id" value="<?php echo $sikd_satker_id; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Kode<?php echo form_error('kode') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?php echo $kode; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Singkatan<?php echo form_error('singkatan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="singkatan" id="singkatan" placeholder="Singkatan" value="<?php echo $singkatan; ?>" />
                                </div>
                            </div>
                             
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nip Ka Satker<?php echo form_error('nip_ka_satker') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nip_ka_satker" id="nip_ka_satker" placeholder="Nip Ka Satker" value="<?php echo $nip_ka_satker; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Nm Ka Satker<?php echo form_error('nm_ka_satker') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nm_ka_satker" id="nm_ka_satker" placeholder="Nm Ka Satker" value="<?php echo $nm_ka_satker; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Jab Ka Satker<?php echo form_error('jab_ka_satker') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="jab_ka_satker" id="jab_ka_satker" placeholder="Jab Ka Satker" value="<?php echo $jab_ka_satker; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Klasifikasi<?php echo form_error('klasifikasi') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="klasifikasi" id="klasifikasi" placeholder="Klasifikasi" value="<?php echo $klasifikasi; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="char" class='control-label col-md-3'><b>Satker Pendapatan<?php echo form_error('satker_pendapatan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="satker_pendapatan" id="satker_pendapatan" placeholder="Satker Pendapatan" value="<?php echo $satker_pendapatan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="char" class='control-label col-md-3'><b>Sotk Lama<?php echo form_error('sotk_lama') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="sotk_lama" id="sotk_lama" placeholder="Sotk Lama" value="<?php echo $sotk_lama; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Npwp Satker<?php echo form_error('npwp_satker') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="npwp_satker" id="npwp_satker" placeholder="Npwp Satker" value="<?php echo $npwp_satker; ?>" />
                                </div>
                            </div>
                            
                            
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />


                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                <a href="<?php echo site_url('sikd_satker') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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