<style type="text/css">
    p {
        text-align: justify;

    }



    #wrap {
        width: auto;
        position: relative;
    }

    .left,
    .right {
        width: 50%;
        float: left;
    }

    .clearBoth {
        clear: both;
    }

    a {
        font-family: "calibri";
    }

    .center {
        text-align: center;
    }

    .header {
        font-size: 20px;
        font-weight: bold;
    }

    .child {
        text-align: center;
        font-size: 12px;
        font-weight: normal;

    }

    .head-images {
        width: 100px;
        height: 100px;
        float: left;

    }

    .child {
        text-align: center;
        font-weight: normal;

    }

    .cstable td {
        border: 0.6px solid black;
        text-align: center
    }

    .cstable th {
        border: 0.1px solid black;
    }

    .cstable {
        border-collapse: collapse;
        width: 100%;
        font-size: 11px;
    }
</style>

<table>
    <tr>
        <td>
            <?php
            $logo = (file_exists("./assets/img/" . logo())) ? "assets/img/" . logo() : "assets/img/no_image.png";

            ?> 
        </td>
        <td>
            <center>
                <div class="header"><?= strip_tags(strtoupper(identitas('nama_instansi'))) ?>
                </div>
                <br />

                <div class="child">
                    <?= strip_tags(strtoupper(identitas('alamat_lengkap'))) ?> <br />
                    <?= 'Tepl : ' . strip_tags(strtoupper(identitas('telp'))) . ', Fax : ' . strip_tags(strtoupper(identitas('fax'))) ?>
                </div>
            </center>
        </td>
    </tr>
</table>
<hr />

<div class="child">
    PERINTAH PERJALANAN DINAS <br />(SPPD)

</div>

<table>

    <tr>
        <td>1. Pejabat yang memberi perintah .</td>
        <td>:</td>
        <td></td>
    </tr>

    <tr>
        <td>2. Nama Pegawai Yang Di Perintah </td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;a. Pangkat dan Golongan</td>
        <td>:</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;b. Jabatan</td>
        <td>:</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;c. Tingkat menurut peraturan perjalanan</td>
        <td>:</td>
    </tr>
    <tr>
        <td>4. Maksud Perjalanan Dinas</td>
        <td>:</td>
    </tr>
    <tr>
        <td>5. Alat yang dipergunakan</td>
        <td>:</td>
    </tr>
    <tr>
        <td>6. a. Tempat Berangkat</td>
        <td>:</td>
    </tr>

    <tr>
        <td>6. b. Tempat Tujuan</td>
        <td>:</td>
    </tr>

    <tr>
        <td>7. Lamanya Perjalanan Dinas</td>
        <td>:</td>
    </tr>

    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;b. Tanggal Berangkat</td>
        <td>:</td>
    </tr>

    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;b. Tanggal Harus Kembali</td>
        <td>:</td>
    </tr>
    <tr>
        <td>8. Pengikut</td>
        <td>:</td>
    </tr>

    <tr>
        <td>9. Pembebanan Anggaran</td>
        <td>:</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;a. Instansi</td>
        <td>:</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;a. Mata Anggaran</td>
        <td>:</td>
    </tr>
    <tr>
        <td>10. Keterangan Lain-Lain</td>
        <td>:</td>
    </tr>

</table>