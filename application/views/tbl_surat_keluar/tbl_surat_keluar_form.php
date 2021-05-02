<div class='row'>
    <div class='col-md-12'>
        <div class='box-default'>
            <div class='panel-heading'><i class="fa fa-document"></i><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <?= $this->session->flashdata('message') ?>
                    <div id="notifikasi"></div>
                    <form id="surat_keluar_form" method="post" class='form-horizontal form-bordered' enctype="multipart/form-data">
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
                                <label for="varchar" class='control-label col-md-3'><b>No Surat<?php echo form_error('no_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <?php if ($this->uri->segment(2) == 'edit') : ?>
                                        <div class="no_surat_show">
                                            <input type="text" name="no_surat" class="form-control" value="<?php echo $no_surat; ?>">
                                        </div>
                                        <br />
                                    <?php else : ?>
                                        <div class="no_surat_show"></div>
                                        <br />
                                    <?php endif; ?>
                                    <span class="btn btn-sm btn-primary" id="manual">Manual</span>
                                    <span class="btn btn-sm btn-primary" id="otomatis">Otomatis</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tujuan<?php echo form_error('tujuan') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo $tujuan; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Kode Klasifikasi<?php echo form_error('kode') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode" value="<?php echo $kode; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Jenis surat<?php echo form_error('id_jenis_surat') ?></b></label>
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
                                <label for="mediumtext" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi ringkas .." value="<?php echo $isi; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Tgl Surat<?php echo form_error('tgl_surat') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="date" class="form-control" name="tgl_surat" placeholder="Tgl Surat" value="<?php echo $tgl_surat; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>File<?php echo form_error('file') ?></b></label>
                                <div class='col-md-9'>
                                    <tt>File yang boleh di terima pdf|doc|docx|xls|xlxs </tt>
                                    <br /> <br />
                                    <?php if ($this->uri->segment(2) == 'edit') : ?>
                                        <a target="_blank" href="<?= base_url('assets/file_surat/' . $file) ?>" class="btn btn-info"><i class="fa fa-list"></i>Detail file surat </a>
                                        <br />
                                        <small>*) Jika file surat tidak di upload silahkan dikosongkan saja.</small>
                                        <br />
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
        // $('.no_surat_show').html('<div class="callout callout-success">No surat akan muncul di sini</div>');
        $('#id_jenis_surat').change(function() {
            var id_jenis_surat = $(this).val();
            $.ajax({
                url: '<?= base_url('tbl_surat_keluar/check_no_surat') ?>',
                type: 'post',
                data: 'id_jenis_surat=' + id_jenis_surat,
                chace: false,
                dataType: 'json',
                BeforeSend: function() {
                    Swal('progresss...', 'Harap bersabar sedang merandom no surat yang sesuai', 'info');
                },
                success: function(data) {
                    $('.no_surat_show').html('<input type="text" name="no_surat" class="form-control" value="' + data.no_surat + '" readonly="true">"' + data.keterangan + '"');
                },
                error: function(data) {
                    Swal('peringatan', 'server error response', 'error');
                }
            });
        });
        // otomatics and manual

        $('#manual').on('click', function() {
            $('.no_surat_show').html('<input type="text" name="no_surat" class="form-control" value="">');

        });
        $('#otomatis').on('click', function() {

            var id_jenis_surat = $(this).val();

            $.ajax({
                url: '<?= base_url('tbl_surat_keluar/check_no_surat') ?>',
                type: 'post',
                data: 'id_jenis_surat=' + id_jenis_surat,
                chace: false,
                dataType: 'json',
                BeforeSend: function() {
                    Swal('progresss...', 'Harap bersabar sedang merandom no surat yang sesuai', 'info');
                },
                success: function(data) {
                    $('.no_surat_show').html('<input type="text" name="no_surat" class="form-control" value="' + data.no_surat + '" readonly="true">"' + data.keterangan + '"');
                },
                error: function(data) {
                    Swal('peringatan', 'server error response', 'error');
                }
            });

        });


        // save 
        $('#surat_keluar_form').on('submit', function(e) {
            e.preventDefault();
            var datastring = new FormData(this);
            $.ajax({
                url: '<?= $action ?>',
                type: 'post',
                data: datastring,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'Json',
                beforeSend: function() {
                    $('#cupdate').attr("disabled", "disabled");
                    $('#cupdate').css("opacity", ".5");
                },
                success: function(data) {
                    if (data.status == 1) {
                        Swal('Keterangan', 'Data Surat keluar berhasil di simpan', 'success');
                        window.location.href = '<?= base_url('tbl_surat_keluar') ?>';
                        $('#cupdate').css("opacity", "");
                        $("#cupdate").removeAttr("disabled");
                    } else {
                        $('#notifikasi').html(data.msg);
                        // window.location.href = '<?= base_url('tbl_surat_keluar') ?>';
                        $('#cupdate').css("opacity", "");
                        $("#cupdate").removeAttr("disabled");
                    }

                },
                error: function(data) {
                    Swal('Keterangan', 'Data Surat keluar gagal di simpan', 'error');
                }
            });
        });

    });
</script>