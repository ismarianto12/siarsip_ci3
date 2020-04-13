<div class='row'>
  <div class='col-sm-12'>
    <div class='white-box'>
      <h3 class='box-title m-b-0'><?= $judul ?></h3>
      <p class='text-muted m-b-30'>Laporan<?= $judul ?></p>
      <hr />
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
        <hr />

        <div id="notifikasi"></div>
        <table class="table" id="datatables">
          <thead>
            <tr>
              <th>No</th>
              <th>No Agenda</th>
              <th>No Surat</th>
              <th>Asal Surat</th>
              <th>Isi</th>
              <th>Tgl Diterima</th>
 
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
                sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
              },
              processing: true,
              serverSide: true,
              ajax: {
                "url": "<?= base_url('laporan_surat/json_laporan_masuk') ?>",
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
                  "data": "id_surat",
                  "orderable": false
                }, {
                  "data": "no_agenda"
                }, {
                  "data": "no_surat"
                }, {
                  "data": "asal_surat"
                }, {
                  "data": "isi"
                }, {
                  "data": "tgl_diterima"
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
                swal('Keterangan', 'Tanggal awal tidak boleh kosong', 'error');
              } else {
                table_data.draw();
                table_data.ajax.reload();
              }
            });
          });


          function cetak_disposisi(n) {
            swal({
                title: 'Konfirmasi Cetak',
                text: 'Anda Akan Mencetak disposisi surat ini ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Ya',
                closeOnConfirm: true
              },
              function() {
                window.open('<?= base_url('cetak_lembar_disposisi') ?>/' + n, '_blank');
              });
          }
        </script>

      </div>
    </div>
  </div>
</div>