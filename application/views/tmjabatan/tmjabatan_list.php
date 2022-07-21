 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>
            

         * ) Read only
             <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
             <div class='table-responsive'>
                 <?php echo anchor(site_url('tmjabatan/tambah'), 'Tambah Data', 'class="btn bg-navy btn-flat margin btn-xs"'); ?>
                 <?php echo anchor(site_url('tmjabatan/excel'), '<i class=\'fa fa-file-excel-o\'></i>Excel', 'class="btn btn-info btn-xs"'); ?>
                 <?php echo anchor(site_url('tmjabatan/word'), '<i class=\'fa fa-file-word-o\'></i>Word', 'class="btn btn-danger btn-xs"'); ?>

                 <br /><br />
                 <table class="table" id="datatables">
                     <thead>
                         <tr>
                             <th width="80px">No</th>
                             <th>Nama</th>
                             <th>Deskripsi</th>
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
                                 "url": "tmjabatan/json",
                                 "type": "POST"
                             },
                             columns: [{
                                     "data": "Id",
                                     "orderable": false
                                 }, {
                                     "data": "Title"
                                 }, {
                                     "data": "Description"
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
                                 window.location.href = '<?= base_url('tmjabatan/hapus/') ?>' + n;
                             });
                     }
                 </script>
             </div>
         </div>
     </div>
 </div>