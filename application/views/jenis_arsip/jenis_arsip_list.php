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
                <button to="<?= base_url('jenis_arsip/tambah') ?>" id="tambah" class="btn btn-success btn-xs">Tambah data</button>
                <br  /><br  />

                <div id="main_form"></div>
                <div class='widget-body'>
                    <table class="table" id="datatables">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Jenis Arsip</th>
                                <th>Create Id</th>
                                <th>Create Date</th>
                                <?php if ($this->session->level == 'admin') : ?>
                                    <th width="200px">Action</th>
                                <?php endif; ?>
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
                                    sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                                },
                                processing: true,
                                serverSide: true,
                                ajax: {
                                    "url": "jenis_arsip/json",
                                    "type": "POST"
                                },
                                columns: [{
                                        "data": "id_jenis",
                                        "orderable": false
                                    }, {
                                        "data": "jenis_arsip"
                                    }, {
                                        "data": "create_id"
                                    }, {
                                        "data": "create_date"
                                    }
                                    <?php if ($this->session->level == 'admin') : ?>,
                                        {
                                            "data": "action",
                                            "orderable": false,
                                            "className": "text-center"
                                        }
                                    <?php endif; ?>
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
                                    $.ajax({
                                        url: '<?= base_url('jenis_arsip/hapus') ?>',
                                        type: 'POST',
                                        data: 'id_jenis=' + n,
                                        chace: false,
                                        success: function(data) {
                                            $('#datatables').DataTable().ajax.reload();
                                            $('#notifikasi').html('<div class="callout callout-info">Data Berhasil Di Hapus</div>');
                                        },
                                        error: function(data) {
                                            Swal('Harap Coba Lagi', 'Tidak dapat menghapus', 'danger');
                                        }
                                    });

                                });
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>