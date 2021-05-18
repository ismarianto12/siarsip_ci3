<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
            <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3>
            <div class='table-responsive'>

                <table class="table table-striped">
                    <tr>
                        <td>No Agenda</td>
                        <td><?php echo $no_agenda; ?></td>
                    </tr>
                    <tr>
                        <td>No Surat</td>
                        <td><?php echo $no_surat; ?></td>
                    </tr>
                    <tr>
                        <td>Asal Surat</td>
                        <td><?php echo $asal_surat; ?></td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td><?php echo $isi; ?></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td><?php echo $kode; ?></td>
                    </tr>
                    <!-- <tr><td>Indeks Surat</td><td><?php echo $indeks; ?></td></tr> -->
                    <tr>
                        <td>Tgl Surat</td>
                        <td><?php echo $tgl_surat; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Diterima</td>
                        <td><?php echo $tgl_diterima; ?></td>
                    </tr>
                    <tr>
                        <td>File</td>
                        <td><a target="_blank" href="<?= base_url('assets/file_surat/' . $file) ?>" class="btn btn-primary btn-sm"><i class="fa fa-download"></i>Download </a></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><?php echo $keterangan; ?></td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>