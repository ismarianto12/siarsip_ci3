<script>
    $(function() {
        $('#satker_id').select2();
    });
</script>

<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>


            <div class='table-responsive'>
                <div class="text-right">
                    <a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                </div>
                <form class="form-horizontal" method="POST">
                    <div class="form-group row">
                        <label class="col-md-3 form-label">Satuan Kerja</label>
                        <div class="col-md-4">
                            <select class="form-control satker_id" name="satker_id" id="satker_id">
                                <option value="">Semua </option>
                                <?php
                                foreach ($this->properti->satker() as $key) {   ?>

                                    <option value="<?= $key->id ?>"><?= $key->nama ?></option>

                                <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>

                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Bidang</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jabatan</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>

                </table>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
                            return {
                                "iStart": oSettings._iDisplayStart,
                                "iEnd": oSettings.fnDisplayEnd(),
                                "iLength": oSettings._iDisplayLength,
                                "iTotal": oSettings.fnRecordsTotal(),
                                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                            };
                        };

                        var t = $("#datatables").DataTable({
                            initComplete: function() {
                                var api = this.api();
                                $('#datatables input')
                                    .off('.DT')
                                    .on('keyup.DT', function(e) {
                                        if (e.keyCode == 13) {
                                            api.search(this.value).draw();
                                        }
                                    });
                            },
                            oLanguage: {
                                sProcessing: "<i class='fa fa-refresh fa-spin fa-4x'></i><br /> <h3>Loading  ...</h3>"
                            },
                            processing: true,
                            serverSide: true,
                            ajax: {
                                "url": "<?= base_url('pegawai/json') ?>",
                                "type": "POST",
                                "data": function(data) {
                                    data.satker_id = $('#satker_id').val();
                                }
                            },
                            dom: 'Bfrtip',
                            buttons: [{
                                    extend: 'copyHtml5',
                                    className: 'btn btn-info btn-xs'
                                },
                                {
                                    extend: 'excelHtml5',
                                    className: 'btn btn-success btn-xs'
                                },
                                {
                                    extend: 'csvHtml5',
                                    className: 'btn btn-warning btn-xs'
                                },
                                {
                                    extend: 'pdfHtml5',
                                    className: 'btn btn-prirmay btn-xs'
                                }
                            ],

                            columns: [{
                                    "data": "id",
                                    "orderable": false
                                }, {
                                    "data": "nip"
                                }, {
                                    "data": "nama"
                                }, {
                                    "data": "namasatker"
                                }, {
                                    "data": "alamat"
                                }, {
                                    "data": "tanggal_lahir"
                                },
                                {
                                    "data": "jabatan"
                                },
                                {
                                    "data": "action",
                                    "orderable": false,
                                    "className": "text-center"
                                }
                            ],
                            order: [
                                [0, 'desc']
                            ],
                            rowCallback: function(row, data, iDisplayIndex) {
                                var info = this.fnPagingInfo();
                                var page = info.iPage;
                                var length = info.iLength;
                                var index = page * length + (iDisplayIndex + 1);
                                $('td:eq(0)', row).html(index);
                            }
                        });
                        $('#satker_id').on('change', function(e) {
                            e.preventDefault();
                            $("#datatables").DataTable().ajax.reload();
                        });
                    });



                    function hapus(n) {
                        Swal({
                                title: 'Konfirmasi Hapus',
                                text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonClass: 'btn-danger',
                                confirmButtonText: 'Ya',
                                closeOnConfirm: false
                            },
                            function() {
                                Swal('Hapus Data', 'Data Berhasil Di Hapus', 'success');
                                window.location.href = '<?= base_url('pegawai/hapus/') ?>' + n;
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>