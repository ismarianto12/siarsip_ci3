<script>
    $(function() {
        $('#batal').click(function(e) {
            e.preventDefault();
            $('#main_form').hide().slideUp().scrollTop(0);
            $('#cari').show();
            $('#tambah').show();
        });
    });

    /* action add or edit */
    $(function() {
        $('#simpan').submit(function(e) {
            e.preventDefault();
            var action = $(this).attr('to');
            var datastring = $(this).serialize();

            $.ajax({
                url: action,
                type: 'post',
                data: datastring,
                cache: false,
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
                        $('#datatables').DataTable().ajax.reload();
                    } else if (data.ket == 2) {
                        $('#notifikasi').html('<div class="alert alert-danger">' + data.respon + '</div>');
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
        <div class='widget-header bg-blue'>
            <span class='widget-caption'><?= ucfirst($judul) ?></span>
        </div>
        <div class='widget-body'>
            <div class='form-title'>
                <h3><?= $judul ?></h3>
            </div>
            <form to="<?php echo $action; ?>" id="simpan" method="post">
                <div class="form-group">
                    <label for="varchar">Jenis Arsip <?php echo form_error('jenis_arsip') ?></label>
                    <input type="text" class="form-control" name="jenis_arsip" id="jenis_arsip" placeholder="Jenis Arsip" value="<?php echo $jenis_arsip; ?>" />
                </div>

                <input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" />
                <button type="submit" id="simpan" class="btn btn-primary btn-xs"><i class='fa fa-save'></i><?php echo $button ?></button>
                <button id="batal" class="btn btn-warning btn-xs"><i class='fa fa-share'></i>Cancel</button>
            </form>
        </div>
    </div>


    <br /><br /><br /><br /><br />