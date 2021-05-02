<script type="text/javascript">
    // /jQuery.noConflict();
    $(function() {
        $('#datatables').on('click', ' #tampil', function() {
            var access = $(this).attr('to');
            $('.main_app').load(access).slideDown();
        });

    });
</script>


<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
            <h3 class='box-title m-b-0'>Log akses </h3>
            <p class='text-muted m-b-30'>Histori Akses</p>
            <div class="main_app"></div>
            <div class='table-responsive'>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Dari Tanggal</b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="dari" id="dari" placeholder="Dari .." />
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Sampai Tanggal</b></label>
                    <div class='col-md-9'>
                        <input type="date" class="form-control" name="sampai" id="sampai" placeholder="Tujuan" value="" />
                    </div>
                </div>
                <br /><br />

                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Id User</th>
                            <th>Url</th>
                            <th>Aktivitasi</th>
                            <th>Tanggal</th>
                            <th>Ip Address</th>
                            <th>Browser</th>
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

                            },
                            processing: true,
                            serverSide: true,
                            ajax: {
                                "url": "<?= base_url('histori/json') ?>",
                                "type": "POST",
                                "data": function(data) {
                                    var dari = $('#dari').val();
                                    var sampai = $('#sampai').val();

                                    data.dari = dari;
                                    data.sampai = sampai;
                                },

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
                                    "data": "id_histori",
                                    "orderable": false
                                }, {
                                    "data": "nama_user"
                                }, {
                                    "data": "url"
                                }, {
                                    "data": "aktivitasi"
                                }, {
                                    "data": "tanggal"
                                }, {
                                    "data": "ip_address"
                                }, {
                                    "data": "browser"
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

                        $('#sampai').change(function() {
                            if ($('#dari').val() == '') {
                                Swal('Keterangan', 'Tanggal awal tidak boleh kosong', 'error');
                            } else {
                                t.draw();
                                t.ajax.reload();
                            }
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
                                window.location.href = '<?= base_url('histori/hapus/') ?>' + n;
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>