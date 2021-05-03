<div class='col-lg-12'>
    <div class='widget'>

        <h3><i class="fa fa-user"></i><?= $judul ?></h3>
        <div class="widget-body">
            <div id="notifikasir"></div>
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" id="cupdate" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Username <?php echo form_error('username') ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Password <?php echo form_error('password') ?></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama <?php echo form_error('nama') ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <!--    <label class="col-sm-2 control-label no-padding-right">Level <?php echo form_error('level') ?></label>
                <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" /> -->
                        <label class="col-sm-2 control-label no-padding-right">Level <?php echo form_error('level') ?></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="level" required="">

                                <option value="admin">Administrator</option>
                                <option value="staff">Staff</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Email <?php echo form_error('email') ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                        </div>
                    </div>

                    <div class="form-group">

                        <center>
                            <img src="<?= base_url('assets/img/foto/' . $foto) ?>" alt="" class="header-avatar" id="image_upload_preview" class="img-responsive" style="width: 100px;height: 100px" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                        </center>
                        <br />
                        <label class="col-sm-2 control-label no-padding-right">Foto Profil <?php echo form_error('foto') ?></label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto Profil .." value="<?php echo $foto; ?>" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Aktif <?php echo form_error('active') ?></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="active" required="">
                                <option value="Y">YES</option>
                                <option value="N">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                            <button type="submit" class="btn bg-green btn-flat margin shiny"><i class='fa fa-save'></i><?php echo $button ?></button>
                            <a href="<?php echo site_url('login') ?>" class="btn btn-warning shiny"><i class='fa fa-share'></i>Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_upload_preview').attr('src', e.target.result);
                    $('#image_2').attr('src', e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#foto").change(function() {
            var ext = $('#foto').val().split('.').pop().toLowerCase();
            //Allowed file types
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                Swal('File Error', 'tidak bisa upload', 'warning');
                $('#foto').val('');
            } else {
                readURL(this);
            }
        });


        $('#cupdate').submit(function(e) {
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            var password_ul = $('#password_ul').val();
            var nama = $('#nama').val();
            var email = $('#email').val();
            //   var foto = $('#foto').val();
            if (username == '') {
                Swal('Keterangan', 'Username tidak boleh kosong', 'error');
            } else if (password == '') {
                Swal('Keterangan', 'Password tidak boleh kosong', 'error');
            } else if (password_ul == '') {
                Swal('Keterangan', 'Ulangi Password tidak boleh kosong', 'error');
            } else if (nama == '') {
                Swal('Keterangan', 'Nama tidak boleh kosong', 'error');
            } else if (email == '') {
                Swal('Keterangan', 'email tidak boleh kosong', 'error');
            } else {

                var datastring = new FormData(this);
                $.ajax({
                    url: '<?= $action ?>',
                    type: 'post',
                    data: datastring,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        $('#cupdate').attr("disabled", "disabled");
                        $('#cupdate').css("opacity", ".5");
                    },
                    success: function(data) {
                        if (data.status == 2) {
                            $('#notifikasir').html('<div class="callout callout-danger">' + data.msg + '</div>');
                            $('#cupdate').css("opacity", "");
                            $("#cupdate").removeAttr("disabled");
                        } else {
                            Swal('Keterangan', 'Data User berhasil di simpan', 'success');
                            $('#cupdate').css("opacity", "");
                            $("#cupdate").removeAttr("disabled");
                            window.location.href = '<?= base_url('login') ?>';
                        }
                    },
                    error: function(data) {
                        Swal('Keterangan', 'Data username dan password gagal di update', 'warning');
                    }
                });
            }
        });
    });
</script>