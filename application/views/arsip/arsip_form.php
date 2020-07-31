<script type="text/javascript">
  $(function() {
    $('#batal').click(function(e) {
      e.preventDefault();
      $('.main_app').hide().slideUp();
    });
  });

  /* action add or edit */
  $(function() {
    $('#simpan').submit(function(e) {
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
            swal('Keterangan', 'Data berhasill di simpan', 'success');
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
          swal('Keterangan', 'server belum bisa respon', 'warning');
        }
      });
    });
  });
</script>

<div class='col-lg-12'>
  <div class='widget'>
    <div class='callout callout-info'>
      <span class='widget-caption'><?= ucfirst($judul) ?></span>
    </div>
    <div class='widget-body'>

      <div class='form-title'>
        <h3><?= $judul ?></h3>
      </div>

      <div id="notifikasi"></div>
      <?= $this->session->flashdata('message') ?>
      <form to="<?php echo $action; ?>" id="simpan" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="varchar"><b>Jenis Arsip <?php echo form_error('id_jenis') ?></b></label>
          <select class="form-control" name="id_jenis" required="">
            <option value="">Pilih Jenis Arsip</option>
            <?php foreach ($this->db->get('jenis_arsip')->result_array() as $re) : ?>
              <option value="<?= $re['id_jenis'] ?>" <?php if ($id_jenis == $re['id_jenis']) echo 'selected'; ?>><?= $re['jenis_arsip'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
          <label for="varchar"><b>Nama Arsip <?php echo form_error('nama_arsip') ?></b></label>
          <input type="text" class="form-control" name="nama_arsip" id="nama_arsip" placeholder="Nama Arsip" value="<?php echo $nama_arsip; ?>" />
        </div>
        <div class="form-group">

          <span class="callout callout-danger">
            <i class="fa fa-info"></i>
            *** File yang dapat di upload docx Zip,gif,jpg,png,jpeg,PNG,pdf,PDF,doc,docx,mp4,mp3,MP3;
          </span>
          <br />
          <br />

          <label for="varchar"><b>File Arsip <?php echo form_error('file_arsip') ?></b></label>
          <?php if ($aksi == 'edit') : ?>
            <i>file yang di upload sebeumnya :</i> <a href="<?= base_url() ?>" class="btn btn-primary"> <?= $file_arsip ?></a>
            <div class="clearfix"></div>
          <?php else : ?>

          <?php endif; ?>
          <div class="clearfix"></div>
          <br /> <br />
          <input type="file" class="form-control" name="file_arsip" id="file_arsip" placeholder="File Arsip" value="<?= $file_arsip ?>" />
        </div>
        <div class="form-group">
          <label for="varchar"><b>Lokasi <?php echo form_error('lokasi') ?></b></label>
          <select class="form-control" name="lokasi" required="">
            <option value="">Pilih Data Lokasi Arsip</option>
            <?php foreach ($this->db->get('lokasi')->result_array() as $dt) :

            ?>
              <option value="<?= $dt['id_lokasi'] ?>" <?php if ($lokasi == $dt['id_lokasi']) echo 'selected'; ?>><?= $dt['nama_lokasi'] ?></option>
            <?php endforeach ?>
          </select>
        </div>


        <div class="form-group">
          <label for="varchar"><b>Satuan Arsip <?php echo form_error('id_satuan') ?></b></label>
          <select class="form-control" name="id_satuan" required="">
            <option value="">-Pilih Satuan-</option>
            <?php foreach ($this->db->get('m_satuan')->result_array() as $dt) : ?>
              <option value="<?= $dt['id_satuan'] ?>" <?php if ($id_satuan == $dt['id_satuan']) echo 'selected'; ?>><?= $dt['nama_satuan'] ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form-group">
          <label for="varchar"><b>Jumlah Data Arsip<?php echo form_error('jumlah') ?></b></label>
          <input type="text" name="jumlah" class="form-control" value="<?= $jumlah ?>">
        </div>

        <?php error_reporting(0);
        if ($this->session->level == 'admin') : ?>
          <h3>Bidang Akses : </h3>
          <hr />
          <small>Bidang akses , menampilkan data arsip berdasarkan level akses</small>
          <?php
          $level = ['admin', 'user', 'staff'];
          $qlevel = implode('.', $level);

          foreach ($level as $s) :
            $rlevel = (strpos(".$permision.", $s)) ? 'checked' : '';
          ?>
            <div class="form-group">
              <div>
                <label>
                  <input type="checkbox" name="permision[]" value="<?= $s ?>" <?= $rlevel ?>>
                  <span class="text"><?= ucfirst($s) ?></span>
                </label>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif ?>

        <div class="form-group">
          <label for="ket_isi"><b>Ket Isi <?php echo form_error('ket_isi') ?></b></label>
          <textarea class="form-control" rows="3" name="ket_isi" id="ket_isi" placeholder="Ket Isi"><?php echo $ket_isi; ?></textarea>
        </div>
        <input type="hidden" name="id_arsip" value="<?php echo $id_arsip; ?>" />
        <button type="submit" id="simpan" class="btn btn-primary btn-xs shiny"><i class='fa fa-save'></i><?php echo $button ?></button>
        <button class="btn btn-warning btn-xs shiny" id="batal"><i class='fa fa-share'></i>Cancel</button>
      </form>
    </div>
  </div>


  <hr />
  <br />