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
                        Swal('Keterangan', 'Data berhasill di simpan', 'success');
                        $('form').css("opacity", "");
                        $("form").removeAttr("disabled");
                        $('#datatables').DataTable().ajax.reload();
                    } else if (data.ket == 2) {
                        $('#notifikasir').html('<div class="callout callout-danger">' + data.respon + '</div>');
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
<div class='col-lg-3'>
</div>
<div class='col-lg-9'>
    <div class='widget'>

        <div class='widget-body'>
            <div class='form-title'>
                <h3><?= $judul ?></h3>
            </div>
            <div id="notifikasir"></div>
            <form to="<?php echo $action; ?>" id="simpan" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="varchar" class="col-md-3">Jenis Arsip <?php echo form_error('jenis_arsip') ?></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="jenis_arsip" id="jenis_arsip" placeholder="Jenis Arsip" value="<?php echo $jenis_arsip; ?>" />
                    </div>
                </div>

                <input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" />
                <button type="submit" id="simpan" class="btn bg-navy btn-flat margin btn-xs"><i class='fa fa-save'></i><?php echo $button ?></button>
                <button id="batal" class="btn bg-navy btn-flat margin btn-xs"><i class='fa fa-share'></i>Cancel</button>
            </form>
        </div>
    </div>


    <br /><br /><br /><br /><br />