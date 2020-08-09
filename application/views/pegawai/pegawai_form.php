
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
                                <label for="varchar" class='control-label col-md-3'><b>Nip<?php echo form_error('nip') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $nip; ?>" />
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
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Alamat<?php echo form_error('alamat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Tanggal Lahir<?php echo form_error('tanggal_lahir') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tempat Lahir<?php echo form_error('tempat_lahir') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Golongan<?php echo form_error('golongan') ?></b></label>
                                <div class='col-md-9'>
                                    <select name="golongan" class="form-control">
                                        <?php foreach ($this->properti->tmjabatan()->result_array() as $data) {
                                            $check = ($data['id'] == $golongan) ? 'selected' : ''; ?>
                                            <option value="<?= $data['id'] ?>" <?= $check ?>> <?= $data['Description'] ?></option> 
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Golongan Tanggal<?php echo form_error('golongan_tanggal') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="golongan_tanggal" id="golongan_tanggal" placeholder="Golongan Tanggal" value="<?php echo $golongan_tanggal; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Jabatan<?php echo form_error('jabatan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Jabatan Tanggal<?php echo form_error('jabatan_tanggal') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="jabatan_tanggal" id="jabatan_tanggal" placeholder="Jabatan Tanggal" value="<?php echo $jabatan_tanggal; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="int" class='control-label col-md-3'><b>Kerja Tahun<?php echo form_error('kerja_tahun') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kerja_tahun" id="kerja_tahun" placeholder="Kerja Tahun" value="<?php echo $kerja_tahun; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="int" class='control-label col-md-3'><b>Kerja Bulan<?php echo form_error('kerja_bulan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kerja_bulan" id="kerja_bulan" placeholder="Kerja Bulan" value="<?php echo $kerja_bulan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Latihan Jabatan<?php echo form_error('latihan_jabatan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="latihan_jabatan" id="latihan_jabatan" placeholder="Latihan Jabatan" value="<?php echo $latihan_jabatan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Latihan Jabatan Tanggal<?php echo form_error('latihan_jabatan_tanggal') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="latihan_jabatan_tanggal" id="latihan_jabatan_tanggal" placeholder="Latihan Jabatan Tanggal" value="<?php echo $latihan_jabatan_tanggal; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="int" class='control-label col-md-3'><b>Latihan Jabatan Jam<?php echo form_error('latihan_jabatan_jam') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="latihan_jabatan_jam" id="latihan_jabatan_jam" placeholder="Latihan Jabatan Jam" value="<?php echo $latihan_jabatan_jam; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Pendidikan<?php echo form_error('pendidikan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Pendidikan Lulus<?php echo form_error('pendidikan_lulus') ?></b></label>
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
                            <div class="form-group">
                                <label for="keterangan" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />

                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                <a href="<?php echo site_url('pegawai') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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