<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
            <h4 class='text-muted m-b-30'><i class="fa fa-list"></i> Report Surat perjalanan dinas</h4>
            <br /><br />
            <div class='table-responsive'>
                <div class="col-md-6 align-right">

                    <div class="form-group">
                        <label for="varchar" class='control-label col-md-6'><b>Dari Tanggal</b></label>
                        <div class='col-md-6'>
                            <input type="date" class="form-control" name="dari" id="dari" placeholder="Dari .." />
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="varchar" class='control-label col-md-6'><b>Sampai Tanggal</b></label>
                        <div class='col-md-6'>
                            <input type="date" class="form-control" name="sampai" id="sampai" placeholder="Tujuan" value="" />
                        </div>
                    </div>
                </div>
                <br /><br />

                <br /><br />
                <table class="table" id="datatables">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>No SSPD</th>
                            <th>Tanggal</th>
                            <th>Maksud</th>
                            <th>Pemberi Perintah</th>
                            <th>yang di perintah</th>
                            <th>Tujuan</th>
                            <th>Berangkat</th>
                            <th>Kembali</th>
                        </tr>
                    </thead>

                </table>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $.fn.dataTable.ext.errMode = 'none';
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

                        var table_data = $("#datatables").DataTable({
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
                                sProcessing: '<center><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></center>'
                            },
                            processing: true,
                            serverSide: true,
                            ajax: {
                                "url": "<?= base_url('laporan_sppd/json_data') ?>",
                                "type": "POST",
                                "data": function(data) {
                                    var dari = $('#dari').val();
                                    var sampai = $('#sampai').val();

                                    data.dari = dari;
                                    data.sampai = sampai;
                                },
                            },
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ],

                            columns: [{
                                    "data": "sppd_id",
                                    "orderable": false
                                }, {
                                    "data": "code"
                                }, {
                                    "data": "date"
                                },
                                {
                                    "data": "purpose"
                                },
                                {
                                    'data': 'pimpinan'
                                },
                                {
                                    'data': 'pengikut'
                                },
                                {
                                    "data": "place_to"
                                },
                                {
                                    "data": "date_go"
                                },
                                {
                                    "data": "date_back"
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
                                table_data.draw();
                                table_data.ajax.reload();
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>
</div>