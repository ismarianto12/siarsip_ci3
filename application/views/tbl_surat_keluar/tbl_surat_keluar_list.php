<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
            <div class="box-default">
                <div class="box-header">
                    <h3 class="box-title">Master Surat Keluar</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <?php if ($this->session->level != 'admin' and $this->session->level != 'staff') {
                            } else {
                                echo anchor(site_url('tbl_surat_keluar/tambah'), 'Tambah Data', 'class="btn bg-green btn-flat margin"');
                            } ?>

                        </div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <select class="form-control" name="jenis_surat" id="jenis_surat">
                    <option value="">Semua Jenis surat :</option>
                    <?php foreach ($this->db->get('jenis_surat')->result_array() as $dr) : ?>
                        <option value="<?= $dr['id_jenis'] ?>"><?= $dr['nama_jenis'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br />
            <br />
            <div class='table-responsive'>
                <table class="table table-bordered table-striped" id="datatables">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Tujuan</th>
                            <th>No Agenda</th>
                            <th>No Surat</th>
                            <th>jenis_surat</th>
                            <th>Kode</th>
                            <th>Tgl Surat</th>
                            <th>File</th>
                            <?php if ($this->session->level != 'admin' and $this->session->level != 'staff') {
                            } else {
                            ?>

                                <th width="200px">Action</th>
                            <?php } ?>

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
                            //  "bSort":false,  
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
                                "url": "tbl_surat_keluar/json",
                                "type": "POST",
                                "data": function(data) {
                                    var id_jenis = $('#jenis_surat').val();
                                    data.id_jenis = id_jenis;
                                }
                            },
                            columns: [{
                                    "data": "id_surat",
                                    "orderable": false
                                }, {
                                    "data": "tujuan"
                                },
                                {
                                    "data": "no_agenda"
                                }, {
                                    "data": "no_surat"
                                }, {
                                    "data": "nama_jenis"
                                }, {
                                    "data": "kode"
                                }, {
                                    "data": "tgl_surat"
                                }, {
                                    "data": "data_file"
                                },
                                <?php if ($this->session->level != 'admin' and $this->session->level != 'staff') {
                                } else {
                                ?> {
                                        "data": "action",
                                        "orderable": false,
                                        "className": "text-center"
                                    }
                                <?php } ?>
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
                        $('#jenis_surat').change(function() {
                            $('#datatables').DataTable().ajax.reload();
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
                                window.location.href = '<?= base_url('tbl_surat_keluar/hapus/') ?>' + n;
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</div>