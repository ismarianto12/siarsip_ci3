<script type="text/javascript">
  $(function() {
    $('#batal').click(function(e) {
      e.preventDefault();
      $('.main_app').hide().slideUp();
    });
  });

  /* action add or edit */
  $(function() {
    $('#cancel_').on('click', function() {
      $(window).scrollTop(10);
      $('.main_app').html('').slideUp();
    });

    $('#simpan').on('submit', function(e) {
      e.preventDefault();
      var action = $(this).attr('to');
      var datastring = new FormData(this);



      $.ajax({
        url: action,
        type: 'post',
        data: datastring,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function() {
          $('form').attr("disabled", "disabled");
          $('form').css("opacity", ".5");
        },
        success: function(data) {
          if (data.ket == 1) {
            Swal('Keterangan', 'Data berhasill di simpan', 'success');
            $('form').css("opacity", "");
            $("form").removeAttr("disabled");
            $('.main_app').hide().slideUp();
            $('#datatables').DataTable().ajax.reload();
          } else if (data.ket == 2) {
            $('#notifikasi').html('<div class="callout callout-danger">' + data.respon + '</div>');
            $('form').css("opacity", "");
            $("form").removeAttr("disabled");
            $('#datatables').DataTable().ajax.reload();
          }
        },
        error: function(data) {
          Swal('Keterangan', 'server belum bisa respon', 'warning');
        }
      });
    });
  });
</script>

<div class='col-lg-12'>
  <div class='widget'>

    <div class='widget-body'>

      <div class='form-title'>
        <h3><?= $judul ?></h3>
      </div>
      <div id="notifikasi"></div>
      <?= $this->session->flashdata('message') ?>
      <form to="<?php echo $action; ?>" id="simpan" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
          <label for="varchar" class='control-label col-md-3'><b>Jenis Arsip <?php echo form_error('id_jenis') ?></b></label>
          <div class='col-md-9'>
            <select class="form-control" name="id_jenis" required="">
              <option value="">Pilih Jenis Arsip</option>
              <?php foreach ($this->db->get('jenis_arsip')->result_array() as $re) : ?>
                <option value="<?= $re['id_jenis'] ?>" <?php if ($id_jenis == $re['id_jenis']) echo 'selected'; ?>><?= $re['jenis_arsip'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="varchar" class="control-label col-md-3"><b>Nama Arsip <?php echo form_error('nama_arsip') ?></b></label>
          <div class='col-md-9'>
            <input type="text" class="form-control" name="nama_arsip" id="nama_arsip" placeholder="Nama Arsip" value="<?php echo $nama_arsip; ?>" />
          </div>
        </div>

        <div class="form-group">



          <label for="varchar" class="control-label col-md-3"><b>File Arsip <?php echo form_error('file_arsip') ?></b><br /></label>
          <div class="col-md-9">
            <?php if ($aksi == 'edit') : ?>


              <i>file yang di upload sebeumnya :</i> <a href="<?= base_url() ?>" class="btn bg-green btn-flat margin"> <?= $file_arsip ?></a>

            <?php else : ?>

            <?php endif; ?>

            <input type="text" class="form-control" name="file_arsipxx" id="file_arsipxx" placeholder="File Arsip" value="" />
            <br />

            <div id="preview"></div>
            <br />
            <br />

            <span class="callout callout-danger">
              <i class="fa fa-info"></i>
              *** File yang dapat di upload docx Zip,gif,jpg,png,jpeg,PNG,pdf,PDF,doc,docx,mp4,mp3,MP3;
            </span>
          </div>
        </div>

        <div class="form-group">
          <label for="varchar" class="control-label col-md-3"><b>Lokasi <?php echo form_error('lokasi') ?></b></label>
          <div class="col-md-9">
            <select class="form-control" name="lokasi" required="">
              <option value="">Pilih Data Lokasi Arsip</option>
              <?php foreach ($this->db->get('lokasi')->result_array() as $dt) :

              ?>
                <option value="<?= $dt['id_lokasi'] ?>" <?php if ($lokasi == $dt['id_lokasi']) echo 'selected'; ?>><?= $dt['nama_lokasi'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="varchar" class="control-label col-md-3"><b>Satuan Arsip <?php echo form_error('id_satuan') ?></b></label>
          <div class="col-md-9">
            <select class="form-control" name="id_satuan" required="">
              <option value="">-Pilih Satuan-</option>
              <?php foreach ($this->db->get('m_satuan')->result_array() as $dt) : ?>
                <option value="<?= $dt['id_satuan'] ?>" <?php if ($id_satuan == $dt['id_satuan']) echo 'selected'; ?>><?= $dt['nama_satuan'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="varchar" class="control-label col-md-3"><b>Jumlah Data Arsip<?php echo form_error('jumlah') ?></b></label>
          <div class="col-md-9">
            <input type="text" name="jumlah" class="form-control" value="<?= $jumlah ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="varchar" class="control-label col-md-3"><b>Keterangan Arsip<?php echo form_error('ket') ?></b></label>
          <div class="col-md-9">
            <input type="text" name="ket" class="form-control" value="<?= $ket ?>">
          </div>
        </div>
        <div class="form-group">
          <?php

          if ($this->session->level == 'admin') : ?>
            <label class="col-md-3">

              <h3>Bidang Akses : </h3>
              <br /><br />



            </label>
            <?php
            $level = ['admin', 'user', 'staff'];
            $qlevel = implode('.', $level);

            foreach ($level as $s) :
              $rlevel = (strpos(".$permision.", $s)) ? 'checked' : '';
            ?>
              <div class="col-md-9">
                <input type="checkbox" name="permision[]" value="<?= $s ?>" <?= $rlevel ?>>
                <span class="text"><?= ucfirst($s) ?></span>

              </div>
            <?php endforeach; ?>
          <?php endif ?>
          <small>Bidang akses , menampilkan data arsip berdasarkan level akses</small>
        </div>
        <div class='form-actions'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
                  <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                  <button type="reset" class="btn btn-default" id="cancel_"><i class='fa fa-share'></i>Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<hr />

<!-- file -->

<div id="tampil_cmodal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-copy"></i>Pilih data arsip</h4>
      </div>
      <div class="modal-body" id="urlnya">

      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    $('#file_arsipxx').on('click', function() {
      event.preventDefault();
      $('#urlnya').html('<iframe width="100%" height="500px" src="<?= base_url('fm/') ?>/filemanager/dialog.php?akey=klasdkasdkaposdkapodkaszxpokpoqkpaosko90321903&type=2&field_id=file_arsipxx\'&fldr=assets/arsip" frameborder="0"  style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>');
      $('#tampil_cmodal').modal('show');

      var link = $('#file_arsipxx').val();
      $('#preview').html('<a id="file_arsipxx" href="' + link + '" class="btn btn-primary btn-sm">Preview</a>');

    });
  });
</script>