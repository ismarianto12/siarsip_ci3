<style type="text/css">
    .sc-date {
        text-align: center;
    }

    .sc-number {
        text-align: right;
    }
</style>
<form id="trsppd" action="<?= $action ?>" method="POST" class="form-horizontal">
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" id="myTabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" id="trsppd_tab_1">Data SPPD</a></li>
                <li id="wrapInput"></li>
                <li class="pull-right bg-danger no-margin" style="padding-right:10px ;padding-left:10px ">
                    <h5 style="font-weight:bold;">
                    </h5>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active full-height" id="tab_1">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Pejabat yang memberi perintah</label>
                                <input type="text" name="nip_pejabat" id="nip_pejabat" class="form-control sc-input-required sc-select" placeholder="Pejabat yang memberi perintah" data-sf="LoadNip">
                                <input type="hidden" name="cPageSource" id="cPageSource" value="">
                                <input type="hidden" name="code" id="code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Maksud Perjalanan Dinas</label>
                        <input type="text" name="purpose" id="purpose" class="form-control sc-input-required" placeholder="Maksud Perjalanan Dinas">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Alat Angkut yang dipergunakan</label>
                                <input type="text" name="transport" id="transport" class="form-control sc-input-required" placeholder="Alat Angkut yang dipergunakan">
                            </div>
                            <div class="col-sm-3">
                                <label>Tempat Berangkat</label>
                                <input type="text" name="place_from" id="place_from" class="form-control sc-input-required" placeholder="Tempat Berangkat">
                            </div>
                            <div class="col-sm-3">
                                <label>Tempat Tujuan</label>
                                <input type="text" name="place_to" id="place_to" class="form-control sc-input-required" placeholder="Tempat Tujuan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label>Lama Perjalanan (Hari)</label>
                                <input type="text" name="length_journey" id="length_journey" class="form-control sc-input-required sc-number" value="1" placeholder="Lama Perjalanan">
                            </div>
                            <div class="col-sm-2">
                                <label>Tgl Berangkat</label>
                                <input type="text" name="date_go" id="date_go" class="form-control sc-input-required sc-date" value="" placeholder="Tgl Berangkat">
                            </div>
                            <div class="col-sm-2">
                                <label>Tgl Kembali</label>
                                <input type="text" name="date_back" id="date_back" class="form-control sc-input-required sc-date" value="" placeholder="Tgl Kembali">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Pegawai yang diperintah</label>
                                <input type="text" name="nip_leader" id="nip_leader" class="form-control sc-input-required sc-select" placeholder="Pegawai yang diperintah" data-sf="LoadNip">
                            </div>
                            <div class="col-sm-2">
                                <label>Tingkat Perjalanan</label>
                                <input type="text" name="rate_travel" id="rate_travel" class="form-control sc-input-required" placeholder="Tingkat Perjalanan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pengikut &nbsp;&nbsp;<small style="opacity:.7"><i>(optional)</i></small></label>
                        <input type="text" name="nip" id="nip" class="form-control sc-select-multi" placeholder="Pengikut" data-sf="LoadNip">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Instansi (Pembebanan Anggaran)</label>
                                <input type="text" name="government" id="government" class="form-control sc-input-required" placeholder="Instansi (Pembebanan Anggaran)">
                            </div>
                            <div class="col-sm-2">
                                <label>Mata Aggaran</label>
                                <input type="text" name="budget_from" id="budget_from" class="form-control sc-input-required" placeholder="Mata Aggaran">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Lain &nbsp;&nbsp;<small style="opacity:.7"><i>(optional)</i></small></label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Keterangn Lain">
                    </div>
                    <hr />
                    <div class="form-group">
                        <label>Dasar Surat</label>
                        <input type="text" name="letter_content" id="letter_content" class="form-control  sc-input-required" placeholder="Dasar Surat">
                    </div>
                    <button type="submit" class="btn btn-primary" id="trsppd" name="cmdSave">Simpan</button>
                </div>
            </div><!-- /.tab-content -->
        </div>
    </section>
</form>
<script type="text/javascript">
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
                        swal({
                            title: "Error",
                            text: "Error :" + data.message,
                            type: "error"
                        })
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
        swal({
            title: 'Data berhasil di input ',
            text: 'Anda kembali kembali kehalamn awal ? , Klik ok  untuk melanjutkan ?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Konfirmasi lagi',
            closeOnConfirm: false
        }).then(function() {

        }).done(function() {

            swal({
                title: "Process ..",
                text: "Sedang Mengalihkan ke halaman ",
                type: "success"
            }).then(function() {
                location.href = '/events';
            });
        });
    });
    }
</script>