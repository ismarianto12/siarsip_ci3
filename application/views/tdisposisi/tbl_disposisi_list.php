 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>
            
             <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
             <div class='table-responsive'>
                 <?php echo anchor(site_url('tdisposisi/tambah'), 'Tambah Data', 'class="btn bg-green btn-flat margin"'); ?>

                 <br /><br />
                 <table class="table" id="datatables">
                     <thead>
                         <tr>
                             <th width="80px">No</th>
                             <th>Tujuan</th>
                             <th>Isi Disposisi</th>
                             <th>Sifat</th>
                             <th>Batas Waktu</th>
                             <th>Catatan</th> 
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
                                 sProcessing: "<i class='fa fa-refresh fa-spin fa-4x'></i><br /> <h3>Loading  ...</h3>"
                             },
                             processing: true,
                             serverSide: true,
                             ajax: {
                                 "url": "tdisposisi/json",
                                 "type": "POST"
                             },
                             columns: [{
                                     "data": "id_disposisi",
                                     "orderable": false
                                 }, {
                                     "data": "tujuan"
                                 }, {
                                     "data": "isi_disposisi"
                                 }, {
                                     "data": "sifat"
                                 }, {
                                     "data": "batas_waktu"
                                 }, {
                                     "data": "catatan"
                                 }, {
                                     "data": "id_surat"
                                 }, {
                                     "data": "id_user"
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
                                 window.location.href = '<?= base_url('tdisposisi/hapus/') ?>' + n;
                             });
                     }
                 </script>
             </div>
         </div>
     </div>
 </div>