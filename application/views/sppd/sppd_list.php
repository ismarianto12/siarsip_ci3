 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>
             <p class='text-muted m-b-30'>Surat perjalanan dinas</p>
             <div class='table-responsive'>
                 <?php echo anchor(site_url('sppd/tambah'), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary btn-xs"'); ?>
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
                                 sProcessing: "loading..."
                             },
                             processing: true,
                             serverSide: true,
                             ajax: {
                                 "url": "sppd/json",
                                 "type": "POST"
                             },
                             columns: [{
                                     "data": "id",
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
                                     'data': 'nip_pejabat'
                                 },
                                 {
                                     'data': 'nip_leader'
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
                     });

                     function hapus(n) {
                         swal({
                                 title: 'Konfirmasi Hapus',
                                 text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
                                 type: 'warning',
                                 showCancelButton: true,
                                 confirmButtonClass: 'btn-danger',
                                 confirmButtonText: 'Ya',
                                 closeOnConfirm: false
                             },
                             function() {
                                 swal('Hapus Data', 'Data Berhasil Di Hapus', 'success');
                                 window.location.href = '<?= base_url('sppd/hapus/') ?>' + n;
                             });
                     }
                 </script>
             </div>
         </div>
     </div>
 </div>