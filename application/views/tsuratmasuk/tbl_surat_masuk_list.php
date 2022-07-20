<script type="text/javascript">
  // /jQuery.noConflict();
  $(function() {
    $('#tambah').click(function() {
      var access = $(this).attr('to');
      $('.main_app').load(access).slideDown();
    });

    $('#datatables').on('click', ' #edit', function() {
      var access = $(this).attr('to');
      $('.main_app').load(access).slideDown();
      $(window).scrollTop(100); 
    });

  });
</script>

<div class='row'>
  <div class='col-sm-12'>
    <div class='white-box'>

      <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
      <div class='table-responsive'>
        <?php if ($this->session->level != 'admin' and $this->session->level != 'staff') {
        } else {
          echo '<button class="btn bg-navy btn-flat margin" to="' . base_url('tsuratmasuk/tambah') . '" id="tambah">Tambah</button>';
        } ?>

        <div class="main_app"></div>
        <br /><br /><br /><br />
        <div class="col-md-5">
          <select class="form-control" name="disposisi" id="disposisi">
            <option value="">Semua Jenis surat :</option>
            <?php
            $data = array('y' => 'Disposisi', 'n' => 'Belum Disposisi');
            foreach ($data as $dr => $val) : ?>
              <option value="<?= $dr ?>"><?= $val ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <br /><br />
        <?= $this->session->userdata('message') ?>
        <div id="notifikasi"></div>
        <table class="table" id="datatables">
          <thead>
            <tr>
              <th width="80px">No</th>
              <th>No Agenda</th>
              <th>No Surat</th>
              <th>Asal Surat</th>
              <th>Tgl Diterima</th>
              <th>File</th>
              <th>Disposisi</th>
              <?php if ($this->session->level == 'admin') : ?>
                <th width="200px">Action</th>
              <?php endif;  ?>
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
                sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
              },
              processing: true,
              serverSide: true,
              ajax: {
                "url": "tsuratmasuk/json",
                "type": "POST",
                "data": function(data) {
                  var disposisi = $('#disposisi').val();
                  data.disposisi = disposisi;
                },
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
                  "data": "id_surat",
                  "orderable": false
                },
                {
                  "data": "no_surat"
                },
                {
                  "data": "no_agenda"
                },
                {
                  "data": "asal_surat"
                }, {
                  "data": "tgl_ind"
                }, {
                  "data": "file_surat"
                }, {
                  "data": "disposisi",
                  "render": function(data, type, row) {
                    if (row.disposisi == 'y') {
                      return '<button class="btn btn-success btn-xs">Surat Di Diposisi.</button>&nbsp;<button class="btn btn-info btn-xs" onclick="return cetak_disposisi(' + row.id_surat + ')">Cetak Diposisi.</button>';
                    }
                    if (row.disposisi == 'n') {
                      return '<button class="btn btn-danger btn-xs">Surat Belum Diposisi.</button>';
                    }
                  },
                  "orderable": false,
                  "className": "text-center"
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
            $('#disposisi').change(function() {
              table_data.draw();
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
                $.ajax({
                  url: '<?= base_url('tsuratmasuk/hapus') ?>',
                  data: 'id_suratmasuk=' + n,
                  type: 'POST',
                  chace: false,
                  success: function(result) {
                    $('#datatables').DataTable().ajax.reload();
                    $('#notifikasi').html('<div class="alert alert-danger">Data berhasil di hapus</div>');
                  },
                  error: function(result) {
                    // Swal('Gagal ','Serer tidak dapat merespon','danger');
                    alert('gagal');
                  }
                });
              });
          }


          /*cetak data disposisi surat*/

          function cetak_disposisi(n) {
            Swal({
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


          /*end cetak data*/

          function set_disposisi(n) {
            $('#tampilan_cari').modal('show');
            $.ajax({
              url: '<?= base_url('tsuratmasuk/get_detail_data') ?>',
              data: 'id_suratmasuk=' + n,
              type: 'post',
              dataType: 'json',
              chace: false,
              success: function(data) {
                $('#id_suratmasuk').html('<input type="hidden" name="id_surat" id="id_surat" value="' + n + '">');
              },
              error: function(data) {
                Swal('error ..', 'maaf server error response, silahkan coba kembali', 'error');
              }
            });
          }

          function kosongkan_form() {
            $('#tujuan').val('');
            $('#isi_disposisi').val('');
            $('#batas_waktu').val('');
            $('#catatan').val('');
            $('#sifat').val('');
            $('#sifat').val('');
          }
          /*simpan data */
          $(function() {
            $('#simpan_disposisi').click(function(e) {
              e.preventDefault();
              var tujuan = $('textarea[name="tujuan"]').val();
              var id_surat = $('#id_surat').val();
              var isi_disposisi = $('#isi_disposisi').val();
              var batas_waktu = $('#batas_waktu').val();
              var catatan = $('#catatan').val();
              var sifat = $('#sifat').val();
              var sifat = $('#sifat').val();

              var dataString = {
                id_surat: id_surat,
                tujuan: tujuan,
                isi_disposisi: isi_disposisi,
                batas_waktu: batas_waktu,
                catatan: catatan,
                sifat: sifat,
                sifat: sifat,
              };
              $.ajax({
                url: '<?= base_url('tdisposisi/tambah_data') ?>',
                data: dataString,
                type: 'post',
                chace: false,
                success: function(data) {
                  Swal('success..', 'surat berhasil di disposisi', 'success');
                  $('#datatables').DataTable().ajax.reload();
                  kosongkan_form();
                  $('#tampilan_cari').modal('hide');

                  /**/
                  var reload = 'yes';
                  $.post('<?= base_url('tsuratmasuk/get_notification') ?>', {
                    reload: reload
                  }, function(respond) {
                    $('.surat_notif').html(respond);
                  });

                },
                error: function(data) {
                  Swal('danger..', 'data tidak bisa di simpan', 'error');
                }
              });
            });
          });
        </script>

      </div>
    </div>
  </div>
</div>

<!-- modal set disposisi surat -->
<div class="modal modal-default" id="tampilan_cari">
  <div class="modal-dialog" style="width: 80%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><i class="fa fa-list"></i> Form desposisi surat masuk. Nomor Surat<div class="nama_judul"></div>
        </h4>
      </div>
      <div class="modal-body">
        <div id="ket_disposisi"></div>
        <form id="data_disposisi" method="post" class='form-horizontal form-bordered'>
          <div class='form-body'>
            <div id="id_suratmasuk"></div>
            <div class="form-group">
              <label for="varchar" class='control-label col-md-3'><b>Tujuan Disposisi</b></label>
              <div class='col-md-9'>
                <textarea class="form-control" name="tujuan" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="timestamp" class='control-label col-md-3'><b>Isi Disposisi</b></label>
              <div class='col-md-9'>
                <textarea class="form-control" name="isi_disposisi" id="isi_disposisi" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="timestamp" class='control-label col-md-3'><b>Batas Waktu</b></label>
              <div class='col-md-9'>
                <input type="date" class="form-control" name="batas_waktu" id="batas_waktu" placeholder="Batas Waktu.." value="" required />
              </div>
            </div>
            <div class="form-group">
              <label for="enum" class='control-label col-md-3'><b>Catatan </b></label>
              <div class='col-md-9'>
                <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatatn disposisi" value="" />
              </div>
            </div>
            <div class="form-group">
              <label for="timestamp" class='control-label col-md-3'><b>Sifat</b></label>
              <div class='col-md-9'>
                <select class="form-control" name="sifat" id="sifat" required="">
                  <option value="Biasa">Biasa</option>
                  <option value="Penting">Penting</option>
                  <option value="Segera">Segera</option>
                  <option value="Rahasia">Rahasia</option>
                </select>
              </div>
            </div>

            <div class='form-actions'>
              <div class='row'>
                <div class='col-md-12'>
                  <div class='row'>
                    <div class='col-md-offset-3 col-md-9'>
                      <button id="simpan_disposisi" class="btn btn-info btn-xs">Simpan Disposisi<i class='fa fa-check'></i></button>
                      <button id="hapus_disposisi" class="btn btn-danger btn-xs">Kosongkan Disposisi<i class='fa fa-delete'></i></button>
                    </div>
                  </div>
                  <br />

                </div>
              </div>
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>