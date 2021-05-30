 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>
             <p class='text-muted m-b-30'>Surat perjalanan dinas</p>
             <div class='table-responsive'>
                 <?php echo anchor(site_url('sppd/tambah'), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn bg-navy btn-flat margin"'); ?>
                 <br /><br />
                 <form id="filter" method="POST" class="filter_by">
                     <div class="card-body">
                         <div class="form-group row">
                             <label for="name" class="col-md-2 text-left"> Jenis SPPD <span class="required-label">*</span></label>
                             <div class="col-md-4">
                                 <select id="jenisppd_id" name="jenisppd_id" class="form-control">
                                     <option value="">Semua data</option>
                                     <?php foreach ($sppdjenis->result() as $sptjeniss) :
                                            $sppd = explode('~', $sptjeniss->name);
                                            $ket = str_replace('SPPD', 'SPT ', $sptjeniss->name);
                                        ?>
                                         <option bdata="<?= $ket ?>" value="<?= $sptjeniss->id ?>"> SPPD - <?= $sppd[1]; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                         </div>
                     </div>
                 </form>
                 <hr />
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

                         $("#datatables").DataTable({
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
                             ajax: {
                                 "url": "<?= base_url('sppd/json') ?>",
                                 "type": "POST",
                                 "data": function(data) {
                                     var jenisppd_id = $('#jenisppd_id').val();
                                     data.jenisppd_id = jenisppd_id;
                                 }
                             },
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
                         //event selected data
                         $('#jenisppd_id').change(function() {
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
                                 window.location.href = '<?= base_url('sppd/hapus/') ?>' + n;
                             });
                     }

                     $(function() {
                         $("#datatables").on('click', '#konfirmasi', function() {
                             $('#myModal').modal('show');

                             var url = $(this).attr('to');
                             var urlnya = $(this).attr('to') + '?action=rtf';
                             $('#pdf').html("<a href='" + url + "' class='btn btn-primary' target='_blank'><i class='fa fa-print'>Print Data PDF</a>");
                             $('#rtf').html("<a href='" + urlnya + "' class='btn btn-warning' target='_blank'><i class='fa fa-print'>Print Data DOCX</a>");

                         });
                     });
                 </script>
             </div>
         </div>
     </div>
 </div>


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="exampleModalLabel">
                     Konfirmasi Cetak Dokument
                 </h4>
             </div>
             <div class="modal-body">
                 <hr />
                 Piliih Salah satu dokumen untuk cetak hasil
                 <p>
                 <div style="display: flex;">
                     <div id="rtf"></div>
                 </div>
                 </p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>