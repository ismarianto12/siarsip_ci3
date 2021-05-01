<script src="<?= base_url('assets/template/js/tinyselect.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/template/css/tinyselect.css') ?>">

<!--  -->
<link href="<?= base_url() ?>/assets/template_lte/plugins/select2/select2.min.css" rel="stylesheet" />
<script src="<?= base_url() ?>/assets/template_lte/plugins/select2/select2.min.js"></script>

<script>
    $(function() {
        function dataParserB(data, selected) {
            retval = [{
                val: "-1",
                text: "---"
            }];
            data.forEach(function(v) {
                retval.push(v);
            });
            return retval;
        }
        $("#nip_pejabat").tinyselect({
            dataUrl: "<?= base_url('pegawai/json_select') ?>",
            dataParser: dataParserB
        });
        $("#nip_diperintah").tinyselect({
            dataUrl: "<?= base_url('pegawai/json_select') ?>",
            dataParser: dataParserB
        });
        $('.js-example-basic-multiple').select2();

    });
</script>


<style type="text/css">
    .sc-date {
        text-align: center;
    }

    .sc-number {
        text-align: right;
    }
</style>



<div class='row'>
    <div class='col-md-12'>
        <div class='box-default'>
            <div class='panel-heading'><i class="fa fa-document"></i><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <form id="trsppd" action="<?= $action ?>" method="POST" class="form-horizontal">
                        <div class='form-body'>
                            <b>Kode Surat - <?= $kode_surat ?></b>
                            <br /><br /><br /><br />
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Pejabat yang memberi perintah<?php echo form_error('letter_code') ?></b></label>
                                <div class='col-md-9'>
                                    <?php if ($this->uri->segment(2) == 'edit') {
                                        $sc       = $this->properti->parsing($nip_pejabat);
                                        $pengikut = $this->Pegawai_model->getPengikut($sc);
                                        foreach ($pengikut->result_array() as $listp) {
                                            echo '<span class="label label-success">' . $listp['nama'] . '-' . $listp['nip'] . '</span> <br />';
                                        }
                                    } ?>
                                    <br />
                                    <select id="nip_pejabat" name="nip_pejabat" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Maksud Perjalanan Dinas<?php echo form_error('letter_subject') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" name="purpose" id="purpose" class="form-control sc-input-required" placeholder="Maksud Perjalanan Dinas" value="<?= $purpose ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Alat Angkut yang dipergunakan<?php echo form_error('letter_about') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" value="<?= $transport ?>" name="transport" id="transport" class="form-control sc-input-required" placeholder="Alat Angkut yang dipergunakan">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tempat Berangkat<?php echo form_error('letter_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="place_from" id="place_from" placeholder="Letter From" value="<?php echo $place_from; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="letter_content" class='control-label col-md-3'><b>Tempat Tujuan<?php echo form_error('letter_content') ?></b></label>

                                <div class='col-md-9'>
                                    <textarea class="form-control" rows="3" name="place_to" id="place_to" placeholder="Letter Content"><?php echo $place_to; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Lama Perjalanan (Hari)<?php echo form_error('letter_date') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="number" class="form-control" name="length_journey" id="length_journey" placeholder="Letter Date" value="<?php echo $length_journey; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tgl Berangkat<?php echo form_error('code') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="date" class="form-control" name="date_go" id="date_go" placeholder="Code" value="<?php echo $code; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class='control-label col-md-3'><b>Tgl Kembali<?php echo form_error('date') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="date" class="form-control" name="date_back" id="date_back" placeholder="Date" value="<?php echo $date; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Pejabat yang di perintah<?php echo form_error('nip_pejabat') ?></b></label>
                                <div class='col-md-9'>
                                    <?php
                                    if ($this->uri->segment(3) == 'edit') {
                                        $nip_leader  = $this->properti->parsing($nip_leader);
                                        $ldiperintah = $this->Pegawai_model->getPengikut($nip_leader);
                                        $lnama       = $ldiperintah->row()->nama;
                                        $lnip        = $ldiperintah->row()->nip;
                                        echo 'pejabat yang di perintah sebelumnya . <br /><span class="label label-success">' . $lnama . '-' . $lnip . '</span> <br />';
                                    }
                                    ?>
                                    <br />
                                    <select id="nip_diperintah" name="nip_leader" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Tingkat Perjalanan<?php echo form_error('rate_travel') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" class="form-control" name="rate_travel" id="rate_travel" placeholder="Rete Travel" value="<?php echo $rate_travel; ?>" />
                                </div>
                            </div>
                            <div class="form-group">

                                <label for="varchar" class='control-label col-md-3'><b>Pengikut<?php echo form_error('nip') ?></b></label>
                                <div class='col-md-9'>
                                    <?php if ($this->uri->segment(2) == 'edit') {
                                        echo '
                                        Data pengikut yang di pilih sebelum nya .<ul>';
                                        $sc       = $this->properti->parsing($nip);
                                        $pengikut = $this->Pegawai_model->getPengikut($sc);
                                        foreach ($pengikut->result_array() as $listp) {
                                            echo '<li><span class="label label-success">' . $listp['nama'] . '-' . $listp['nip'] . '</span><br /><br /></li>';
                                        }
                                        echo '</ul>';
                                    } ?>

                                    <select name="nip[]" class="js-example-basic-multiple form-control" multiple="multiple">
                                        <?php foreach ($this->db->get('pegawai')->result_array() as $list) { ?>
                                            <option value="<?= $list['nip'] ?>"><?= $list['nama'] ?> - <?= $list['nip'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip" class='control-label col-md-3'><b>Instansi (Pembebanan Anggaran)<?php echo form_error('nip') ?></b></label>

                                <div class='col-md-9'>
                                    <input type="text" name="government" id="government" class="form-control sc-input-required" placeholder="Instansi (Pembebanan Anggaran)" value="<?= $government ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="budget_from" class='control-label col-md-3'><b>Mata Aggaran<?php echo form_error('budget_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" name="budget_from" id="budget_from" class="form-control sc-input-required" placeholder="Mata Aggaran" value="<?= $budget_from ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Keterangan<?php echo form_error('description') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" name="description" id="description" value="<?= $description ?>" class="form-control" placeholder="Keterangn Lain">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class='control-label col-md-3'><b>Dasar Surat<?php echo form_error('place_from') ?></b></label>
                                <div class='col-md-9'>
                                    <input type="text" name="letter_content" id="letter_content" class="form-control  sc-input-required" placeholder="Dasar Surat" value="<?= $letter_content ?>">

                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />


                            <div class='form-actions'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-offset-3 col-md-9'>
                                                <button type="submit" class="btn btn-primary" id="trsppd" name="cmdSave">Simpan</button>
                                                <a href="<?php echo site_url('sppd') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>

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
    $('.multiplepegawai').select2();
    $(document).ready(function() {
        $('#trsppd').submit(function(e) {
            //    alert('haha');
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                chace: false,
                success: function(data) {
                    if (data.response == 'y') {
                        redirect();
                    } else if (data.response == 'n') {
                        $('#notifikasi').html('<div class="callout callout-info"><ul style="display: grid;">' + data.message + '</ul></div>');
                    }
                },
                error: function(data, xhr, status) {
                    alert('data error boys' + error);
                }
            });
        })
    })


    ///after data clicked in button 
    function redirect() {
        Swal({
                title: 'Data berhasil di input ',
                text: 'Anda kembali kembali kehalamn awal ? , Klik ok  untuk melanjutkan ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Konfirmasi',
                closeOnConfirm: false
            },
            function() {
                Swal('Mengalihkan .. ', 'Data Sedang di alihkan', 'success');
                window.location.href = '<?= base_url('sppd') ?>';
            });
    }
</script>