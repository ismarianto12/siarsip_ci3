<script>
    $(function() {
        $('#tambah').click(function(e) {
            e.preventDefault()
            $('#main_form').load($(this).attr('to')).slideDown();
        });

        $('#datatables').on('click', ' #edit', function() {
            $('#main_form').load($(this).attr('to')).slideDown();
        });
    });
</script>

<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
           
            <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
            <div class='table-responsive'>
                <button to="<?= base_url('lokasi/tambah') ?>" id="tambah" class="btn btn-success btn-xs">Tambah data</button>
                <br  /><br  />
                <div id="main_form"></div>
                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Nama Lokasi</th>
                            <th>Tanggal Insert</th>
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

                        var t = $("#datatables").dataTable({
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
                                sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                            },
                            processing: true,
                            serverSide: true,
                            ajax: {
                                "url": "lokasi/json",
                                "type": "POST"
                            },
                            columns: [{
                                    "data": "id_lokasi",
                                    "orderable": false
                                }, {
                                    "data": "nama_lokasi"
                                }, {
                                    "data": "tanggal"
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
                                window.location.href = '<?= base_url('lokasi/hapus/') ?>' + n;
                            });
                    }
                </script>

            </div>
        </div>

    </div>
</div>