 
<?= $this->session->userdata('message') ?> 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
        <h3 class='box-title m-b-0'><?= $judul ?></h3>
        <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
        <div class='table-responsive'>  
            <a href="<?= base_url('pengajuan_arsip/add') ?>" class="btn btn-success">Tambah data</a>
            <hr />
            <table class="table table-bordered table-striped" id="datatables">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>No Agenda</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Kirim</th>
                        <th>Tanggal Terima</th>
                        <th>No Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Nama File</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>
                
            </table>
            
            <script type="text/javascript">
                $(document).ready(function() {
                    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                    {
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
                            sProcessing: "loading..."
                        },
                        processing: true,
                        serverSide: true,
                        ajax: {"url": "pengajuan_surat_masuk/json", "type": "POST"},
                        columns: [
                        {
                            "data": "id_pengajuan_s",
                            "orderable": false
                        },{"data": "no_agenda"},{"data": "jenis_surat"},{"data": "tanggal_kirim"},{"data": "tanggal_terima"},{"data": "no_surat"},{"data": "pengirim"},{"data": "perihal"},{"data": "nama_file"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                        ],
                        order: [[0, 'desc']],
                        rowCallback: function(row, data, iDisplayIndex) {
                            var info = this.fnPagingInfo();
                            var page = info.iPage;
                            var length = info.iLength;
                            var index = page * length + (iDisplayIndex + 1);
                            $('td:eq(0)', row).html(index);
                        }
                    });
                });
                
                function hapus(n){
                    swal({
                        title: 'Konfirmasi Hapus',
                        text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonClass: 'btn-danger',
                        confirmButtonText: 'Ya',
                        closeOnConfirm: false
                    },
                    function(){
                       swal('Hapus Data', 'Data Berhasil Di Hapus', 'success'); 
                       window.location.href='<?= base_url('pengajuan_surat_masuk/hapus/') ?>'+n;
                   });
                }
            </script>
            
        </div>
    </div> 
</div>
</div> 

