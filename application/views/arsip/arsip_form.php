<script type="text/javascript">
  $(function() {
    $('#batal').click(function(e) {
      e.preventDefault();
      $('.main_app').hide().slideUp();
    });
  });

  /* action add or edit */
  $(function() {
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

            <input type="file" class="form-control" name="file_arsip" id="file_arsip" placeholder="File Arsip" value="<?= $file_arsip ?>" />
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
                  <a href="<?php echo site_url('arsip') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>

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