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

        $("#an_nip").tinyselect({
            dataUrl: "<?= base_url('pegawai/json_select') ?>",
            dataParser: dataParserB
        });

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
                    <div id="notifikasi"></div>
                    <form id="trsppd" action="<?= $action ?>" method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="col-md-6">
                                Surat Peritah Perjalanan dinas
                                <hr />
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Jenis SSPD <?php echo form_error('sspdjeniss_id') ?></b></label>
                                    <div class='col-md-7'>
                                        <select id="sspdjeniss_id" name="sspdjeniss_id" class="form-control">
                                            <?php foreach ($sppdjenis->result() as $sptjeniss) :
                                                            $namespd = str_replace('~', ' ', $sptjeniss->name);
                                                            $ket     = str_replace('SPPD', 'SPT ', $sptjeniss->name);
                                            ?>
                                                <option bdata="<?= $namespd ?>" value="<?= $sptjeniss->id ?>"><?= $namespd ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Pejabat yang memberi perintah<?php echo form_error('nip_pejabat') ?></b></label>
                                    <div class='col-md-7'>
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
                                    <label for="varchar" class='control-label col-md-4'><b>Nomor Surat Perjalanan Dinas<?php echo form_error('letter_code') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="letter_code" id="letter_code" class="form-control sc-input-required" placeholder="Nomor Surat Perjalanan Dinas" value="<?= $letter_code ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Maksud Perjalanan Dinas<?php echo form_error('purpose') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="purpose" id="purpose" class="form-control sc-input-required" placeholder="Maksud Perjalanan Dinas" value="<?= $purpose ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Dasar Perjalanan Dinas <?php echo form_error('basic') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="basic" id="basic" class="form-control sc-input-required" placeholder="Dasar Perjalanan Dinas" value="<?= $basic ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Alat Angkut yang dipergunakan<?php echo form_error('transport') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" value="<?= $transport ?>" name="transport" id="transport" class="form-control sc-input-required" placeholder="Alat Angkut yang dipergunakan">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Tempat Berangkat<?php echo form_error('letter_from') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" class="form-control" name="place_from" id="place_from" placeholder="Letter From" value="<?php echo $place_from; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="letter_content" class='control-label col-md-4'><b>Tempat Tujuan<?php echo form_error('letter_content') ?></b></label>

                                    <div class='col-md-7'>
                                        <textarea class="form-control" rows="3" name="place_to" id="place_to" placeholder="Letter Content"><?php echo $place_to; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Kota<?php echo form_error('city') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Kota asal" value="<?php echo $city; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                Surat Perintah tugas(SPT)
                                <hr />
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Jenis SPT <?php echo form_error('letter_code') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="jenisspt_id" name="jenisspt_id" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Tgl Berangkat<?php echo form_error('code') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="date" class="form-control" name="date_go" id="date_go" placeholder="Code" value="<?php echo $code; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class='control-label col-md-4'><b>Tgl Kembali<?php echo form_error('date') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="date" class="form-control" name="date_back" id="date_back" placeholder="Date" value="<?php echo $date; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Pejabat yang di perintah<?php echo form_error('nip_pejabat') ?></b></label>
                                    <div class='col-md-7'>
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
                                    <label for="varchar" class='control-label col-md-4'><b>Lama Perjalanan<?php echo form_error('rate_travel') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="number" class="form-control" name="length_journey" id="length_journey" placeholder="Lama jalan" value="<?php echo $rate_travel; ?>" style="
    width: 60px;
    display: inline-flex;
"> / Hari
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Pengikut<?php echo form_error('nip') ?></b></label>
                                    <div class='col-md-7'>
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
                                    <label for="nip" class='control-label col-md-4'><b>Instansi (Pembebanan Anggaran)<?php echo form_error('nip') ?></b></label>

                                    <div class='col-md-7'>
                                        <input type="text" name="government" id="government" class="form-control sc-input-required" placeholder="Instansi (Pembebanan Anggaran)" value="<?= $government ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nip" class='control-label col-md-4'><b>Rekening Anggaran<?php echo form_error('rekening') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="rekening" id="rekening" class="form-control sc-input-required" placeholder="" value="<?= $rekening ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="budget_from" class='control-label col-md-4'><b>Mata Aggaran<?php echo form_error('budget_from') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="budget_from" id="budget_from" class="form-control sc-input-required" placeholder="Mata Aggaran" value="<?= $budget_from ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Keterangan<?php echo form_error('description') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="description" id="description" value="<?= $description ?>" class="form-control" placeholder="Keterangn Lain">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="varchar" class='control-label col-md-4'><b>Dasar Surat<?php echo form_error('place_from') ?></b></label>
                                    <div class='col-md-7'>
                                        <input type="text" name="letter_content" id="letter_content" class="form-control  sc-input-required" placeholder="Dasar Surat" value="<?= $letter_content ?>">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-success" type="submit" value="Simpan">
                                    <button class="btn btn-danger" type="reset">Batal</button>
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
                    alert('data error boy');
                }
            });
        })
        // if event click on selected leetter of name category
        $('#sspdjeniss_id').on('change', function() {
            data = $('option:selected', this).attr('bdata');
            // alert(data);
            $('input[name="jenisspt_id"]').val(data);

        });
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