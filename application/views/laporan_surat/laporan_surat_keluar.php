 <div class='row'>
     <div class='col-sm-12'>
         <?= $this->session->userdata('message') ?>
         <div class='white-box'>
             <h3 class='box-title m-b-0'>Laporan Surat Keluar</h3>
             <br /><br />
             <div class='table-responsive'>

                 <div class="form-group">
                     <label for="varchar" class='control-label col-md-3'><b>Dari Tanggal</b></label>
                     <div class='col-md-9'>
                         <input type="date" class="form-control" name="dari" id="dari" placeholder="Dari .." />
                     </div>
                 </div>
                 <br />

                 <div class="form-group">
                     <label for="varchar" class='control-label col-md-3'><b>Sampai Tanggal</b></label>
                     <div class='col-md-9'>
                         <input type="date" class="form-control" name="sampai" id="sampai" placeholder="Tujuan" value="" />
                     </div>
                 </div>

                 <br /><br />

                 <table class="table" id="datatables">
                     <thead>
                         <tr>
                             <th width="80px">No</th>
                             <th>No Agenda</th>
                             <th>Tujuan</th>
                             <th>No Surat</th>
                             <th>jenis_surat</th>
                             <th>Kode</th>
                             <th>Tgl Surat</th>
                             <th>Tgl Catat</th>
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
                                 sProcessing: "loading..."
                             },
                             processing: true,
                             serverSide: true,
                             ajax: {
                                 "url": "<?= base_url('laporan_surat/json_laporan_keluar') ?>",
                                 "type": "POST",
                                 "data": function(data) {
                                     var dari = $('#dari').val();
                                     var sampai = $('#sampai').val();

                                     data.dari = dari;
                                     data.sampai = sampai;
                                 }
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
                                     className: 'btn bg-navy btn-flat margin'
                                 },
                                 {
                                     extend: 'pdfHtml5',
                                     className: 'btn btn-prirmay btn-xs'
                                 }
                             ],
                             columns: [{
                                     "data": "id_surat",
                                     "orderable": false
                                 }, {
                                     "data": "no_agenda"
                                 }, {
                                     "data": "tujuan"
                                 }, {
                                     "data": "no_surat"
                                 }, {
                                     "data": "nama_jenis"
                                 }, {
                                     "data": "kode"
                                 }, {
                                     "data": "tgl_surat"
                                 }, {
                                     "data": "tgl_catat"
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
                                 t.ajax.reload();
                                 t.ajax.draw();
                             }
                         });
                     });
                 </script>
             </div>
         </div>
     </div>
 </div>