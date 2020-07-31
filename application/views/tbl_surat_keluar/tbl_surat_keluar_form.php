<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-info'>
            <div class='panel-heading'><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered' enctype="multipart/form-data">
                        <div class='form-body'>
                            ** ) Harap Isikan data yang di butuhkan pada form.
                            <br /><br /><br /><br />
                            <div class="form-group">
                                <label for="int" class='control-label col-md-3'><b>No Agenda<?php echo form_error('no_agenda') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="no_agenda" id="no_agenda" placeholder="No Agenda" value="<?php echo $no_agenda; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tujuan<?php echo form_error('tujuan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo $tujuan; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Jenis Surat<?php echo form_error('id_jenis_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <select class="form-control" name="id_jenis_surat" id="id_jenis_surat">
                                        <?php
                                        $arr_jenis = $this->db->get('jenis_surat');
                                        foreach ($arr_jenis->result_array() as $data) :
                                            $option = ($data['id_jenis'] == $id_jenis) ? 'selected' : '';  ?>
                                            <option value="<?= $data['id_jenis'] ?>" <?= $option ?>><?= ucfirst($data['nama_jenis']) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>No Surat<?php echo form_error('no_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <div class="no_surat_show"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mediumtext" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi ringkas .." value="<?php echo $isi; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Kode<?php echo form_error('kode') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?php echo $kode; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Tgl Surat<?php echo form_error('tgl_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="tgl_surat" id="datepicker1" placeholder="Tgl Surat" value="<?php echo $tgl_surat; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Tgl Catat<?php echo form_error('tgl_catat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="datepikcer form-control" name="tgl_catat" id="datepicker2" placeholder="Tgl Catat" value="<?php echo $tgl_catat; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>File<?php echo form_error('file') ?></b></label>
                                <div class='col-md-9'>
                                    <?php if ($this->uri->segment(2) == 'edit') : ?>
                                        <a href="<?= base_url('assets/file_surat/' . $file) ?>" class="btn btn-info"><i class="fa fa-list"></i>Detail file surat </a>
                                        <small>*) Jika file surat tidak di upload silahkan dikosongkan saja.</small>
                                    <?php endif; ?>
                                    <input type="file" class="form-control" name="file" id="file" placeholder="File Surat ..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>
                                <div class='col-md-9'>
                                    <textarea class="form-control" placeholder="Keterangan..." name="keterangan"><?= $keterangan ?></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>" />
                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                <a href="<?php echo site_url('tbl_surat_keluar') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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


<script type="text/javascript">
    $(document).ready(function() {
        $("#datatables").dataTable();
        $("#datepicker1").datepicker({

            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true

        });
        $("#datepicker2").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    })

    $(function() {
        $('.no_surat_show').html('<div class="callout callout-success">No surat akan muncul di sini</div>');
        $('#id_jenis_surat').change(function() {
            var id_jenis_surat = $(this).val();
            $.ajax({
                url: '<?= base_url('tbl_surat_keluar/check_no_surat') ?>',
                type: 'post',
                data: 'id_jenis_surat=' + id_jenis_surat,
                chace: false,
                dataType: 'json',
                BeforeSend: function() {
                    swal('progresss...', 'Harap bersabar sedang merandom no surat yang sesuai', 'info');
                },
                success: function(data) {
                    $('.no_surat_show').html('<input type="text" name="no_surat" class="form-control" value="' + data.no_surat + '" readonly="true">"' + data.keterangan + '"');
                },
                error: function(data) {
                    swal('peringatan', 'server error response', 'error');
                }
            });
        });
    });
</script>