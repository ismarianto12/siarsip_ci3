 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>

             <p class='text-muted m-b-30'>Histori Disposisi</p>
             <div class='table-responsive'>

                 <br /><br />
                 <table class="table" id="datatables">
                     <thead>
                         <tr>
                             <th width="80px">No</th>
                             <th>No Agenda</th>
                             <th>No Surat</th>
                             <th>Tujuan</th>
                             <th>Sifat</th>
                             <th>Batas Waktu</th>
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
                                 "url": "tdisposisi/json",
                                 "type": "POST"
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
                                 "data": "id_disposisi",
                                 "orderable": false
                             }, {
                                 "data": "no_agenda"
                             }, {
                                 "data": "no_surat"
                             }, {
                                 "data": "tujuan"
                             }, {
                                 "data": "sifat"
                             }, {
                                 "data": "batas_waktu"
                             }],
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
                                 window.location.href = '<?= base_url('tdisposisi/hapus/') ?>' + n;
                             });
                     }
                 </script>
             </div>
         </div>
     </div>
 </div>