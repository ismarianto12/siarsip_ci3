<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#umum" data-toggle="tab"><i class="fa fa-user"></i> Umum</a></li>

        <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
        <li><a href="#jabatan" data-toggle="tab">Jabatan</a></li>
        <li><a href="#pelatihan" data-toggle="tab">Pelatihan</a></li>

        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>

    <form action="<?= $action ?>" method="post" class='form-horizontal form-bordered'>
        <div class="tab-content">
            <div class="tab-pane active" id="umum">
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nip<?php echo form_error('nip') ?></b></label>
                    <div class='col-md-9'>
                        <input type="number" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $nip; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>No Hp<?php echo form_error('no_hp') ?></b></label>
                    <div class='col-md-9'>
                        <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Alamat<?php echo form_error('alamat') ?></b></label>
                    <div class='col-md-9'>
                        <textarea class="form-control" name="alamat" id="alamat"><?= $alamat ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class='control-label col-md-3'><b>Tanggal Lahir<?php echo form_error('tanggal_lahir') ?></b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Tempat Lahir<?php echo form_error('tempat_lahir') ?></b></label>
                    <div class='col-md-9'>
                        <textarea class="form-control" name="tempat_lahir" id="tempat_lahir"><?= $tempat_lahir ?></textarea>
                    </div>
                </div>
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="pendidikan">
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Pendidikan<?php echo form_error('pendidikan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Tahun Lulus<?php echo form_error('pendidikan_lulus') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="pendidikan_lulus" id="pendidikan_lulus" placeholder="Pendidikan Lulus" value="<?php echo $pendidikan_lulus; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Pendidikan Ijazah<?php echo form_error('pendidikan_ijazah') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="pendidikan_ijazah" id="pendidikan_ijazah" placeholder="Pendidikan Ijazah" value="<?php echo $pendidikan_ijazah; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="catatan_mutasi" class='control-label col-md-3'><b>Catatan Mutasi<?php echo form_error('catatan_mutasi') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="catatan_mutasi" id="catatan_mutasi" placeholder="Catatan Mutasi"><?php echo $catatan_mutasi; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="jabatan">
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b> Jabatan<?php echo form_error('latihan_jabatan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $latihan_jabatan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class='control-label col-md-3'><b>Tanggal Serah Terima Jabatan <?php echo form_error('latihan_jabatan_tanggal') ?></b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="jabatan_tanggal" id="jabatan_tanggal" placeholder="" value="<?php echo $jabatan_tanggal; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class='control-label col-md-3'><b>Tahun Masuk Kerja <?php echo form_error('latihan_jabatan_tanggal') ?></b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="kerja_tahun" id="kerja_tahun" placeholder="" value="<?php echo $kerja_tahun; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b> Golongan<?php echo form_error('latihan_jabatan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="golongan" id="golongan" placeholder="Data Golongan" value="<?php echo $golongan; ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="keterangan" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>

                    <div class='col-md-9'>
                        <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" />

            </div>
            <div class="tab-pane" id="pelatihan">
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nama Pelatihan<?php echo form_error('latihan_jabatan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="latihan_jabatan" id="latihan_jabatan" placeholder="" value="<?php echo $latihan_jabatan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class='control-label col-md-3'><b> Tanggal<?php echo form_error('latihan_jabatan_tanggal') ?></b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="latihan_jabatan_tanggal" id="latihan_jabatan_tanggal" placeholder="" value="<?php echo $latihan_jabatan_tanggal; ?>" />
                    </div>
                </div>

            </div>
            <!-- /.tab-pane -->

            <div class='form-actions'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='row'>
                            <div class='col-md-offset-3 col-md-9'>
                                <button type="submit" class="btn btn-primary"><i class='fa fa-save'></i>Simpan Data</button>
                                <a href="<?php echo site_url('pegawai') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.tab-content -->
    </form>
</div>


<script>
    // $(function() {
    //     $('#pegawai_form').on('submit', function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             url: '<?php echo $action; ?>',
    //             data: $(this).serialize(),
    //             chace: false,
    //             asych: false,
    //             success: function(data) {
    //                 $.alert({
    //                     title: false,
    //                     content: 'url:<?= $action ?>',
    //                     contentLoaded: function(data, status, xhr) {
    //                         // when content is fetched
    //                         alert(status);
    //                     }
    //                 });
    //             },
    //             error: function(data) {
    //                 $.alert(data);

    //             }
    //         })
    //     });
    // });
</script>