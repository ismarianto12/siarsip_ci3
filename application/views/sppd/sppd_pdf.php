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
            <img src="<?= $logo ?>" class="head-images">
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
<div class="child" style="font-size:18px">
    PERINTAH PERJALANAN DINAS <br />
    <b> (SPPD) </b>
</div>
<br />


<table>
    <tr>
        <td>Lembar Ke</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Kode No</td>
        <td>:</td> 
        <td><?= $sppd['code'] ?></td>
    </tr>
    <tr> 
        <td>Nomor</td>
        <td>:</td>
        <td></td>
    </tr>
</table>
<br />
<br />
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
<pagebreak></pagebreak>
<table>
    <tr>
        <td>
            <?php
            $logo = (file_exists("./assets/img/" . logo())) ? "assets/img/" . logo() : "assets/img/no_image.png";

            ?>
            <img src="<?= $logo ?>" class="head-images">
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


<div class="center">
    SURAT PERINTAH TUGAS <br />
    NOMOR :
</div>

<table>
    <tr>
        <td>Dasar </td>
        <td>:</td>
        <td></td>
    </tr>
</table>
<br />
<br />
<br />


<div class="center">
    MEMERINTAHKAN :
</div>
<br /><br />
<table>
    <tr>
        <td>
            Kepada :
        </td>
        <td>
            <table>
                <tr>
                    <td>1. Nama</td>
                    <td>:</td>
                    <td>MIRZA RAMADHANY</td>
                </tr>
                <tr>
                    <td>
                        Pangkat / gol</td>
                    <td> :</td>
                    <td>Pembina Utama Muda / IVc
                    </td>
                </tr>
                <tr>
                    <td>
                        NIP </td>
                    <td>:</td>
                    <td>1958060519860811001</td>
                </tr>
                <tr>
                    <td>
                        Jabatan </td>
                    <td>:</td>
                    <td>Kepala Dinas</td>
                </tr>

                <tr>
                    <td>
                        Jabatan </td>
                    <td>:</td>
                    <td>Kepala Dinas</td>
                </tr>

            </table>
            <table>
                <tr>
                    <td>2. Nama</td>
                    <td>:</td>
                    <td>MIRZA RAMADHANY</td>
                </tr>
                <tr>
                    <td>
                        Pangkat / gol</td>
                    <td> :</td>
                    <td>Pembina Utama Muda / IVc
                    </td>
                </tr>
                <tr>
                    <td>
                        NIP </td>
                    <td>:</td>
                    <td>1958060519860811001</td>
                </tr>
                <tr>
                    <td>
                        Jabatan </td>
                    <td>:</td>
                    <td>Kepala Dinas</td>
                </tr>

                <tr>
                    <td>
                        Jabatan </td>
                    <td>:</td>
                    <td>Kepala Dinas</td>
                </tr>

            </table>
        </td>
    </tr>

</table>

<table>
    <tr>
        <td>
            Untuk </td>
        <td>:</td>
        <td> aa</td>
    </tr>
</table>
<br />
<br />

<br />
<br />
<div id="wrap"></div>
<div class="right">
    <br />
    Dikeluarkan di Pada Tanggal
    : Singosari
    : 3 Agustus 2020
    <br /><br />
    -
    An. Kepala Dinas Kantor Resmi
    <br /><br /> <br /><br />

    ALDIAZ NASHER ARIGHI
    Penata Tk. I
    NIP : 195802281986012002
</div>
</div>