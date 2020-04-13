<?php error_reporting(0); ?>
<style type="text/css">
  table {
    background: #fff;
    padding: 5px;
  }

  tr,
  td {
    border: table-cell;
    border: 1px solid #444;
  }

  tr,
  td {
    vertical-align: top !important;
  }

  #right {
    border-right: none !important;
  }

  #left {
    border-left: none !important;
  }

  .isi {
    height: 300px !important;
  }

  .disp {
    text-align: center;
    padding: 1.5rem 0;
    margin-bottom: .5rem;
  }

  .logodisp {
    float: left;
    position: relative;
    width: 110px;
    height: 110px;
    margin: 0 0 0 1rem;
  }

  #lead {
    width: auto;
    position: relative;
    margin: 25px 0 0 75%;
  }

  .lead {
    font-weight: bold;
    text-decoration: underline;
    margin-bottom: -10px;
  }

  .tgh {
    text-align: center;
  }

  #nama {
    font-size: 2.1rem;
    margin-bottom: -1rem;
  }

  #alamat {
    font-size: 16px;
  }

  .up {
    text-transform: uppercase;
    margin: 0;
    line-height: 2.2rem;
    font-size: 1.5rem;
  }

  .status {
    margin: 0;
    font-size: 1.3rem;
    margin-bottom: .5rem;
  }

  #lbr {
    font-size: 20px;
    font-weight: bold;
  }

  .separator {
    border-bottom: 2px solid #616161;
    margin: -1.3rem 0 1.5rem;
  }

  @media print {
    body {
      font-size: 12px;
      color: #212121;
    }

    nav {
      display: none;
    }

    table {
      width: 100%;
      font-size: 12px;
      color: #212121;
    }

    tr,
    td {
      border: table-cell;
      border: 1px solid #444;
      padding: 8px !important;

    }

    tr,
    td {
      vertical-align: top !important;
    }

    #lbr {
      font-size: 20px;
    }

    .isi {
      height: 200px !important;
    }

    .tgh {
      text-align: center;
    }

    .disp {
      text-align: center;
      margin: -.5rem 0;
    }

    .logodisp {
      float: left;
      position: relative;
      width: 80px;
      height: 80px;
      margin: .5rem 0 0 .5rem;
    }

    #lead {
      width: auto;
      position: relative;
      margin: 15px 0 0 75%;
    }

    .lead {
      font-weight: bold;
      text-decoration: underline;
      margin-bottom: -10px;
    }

    #nama {
      font-size: 20px !important;
      font-weight: bold;
      text-transform: uppercase;
      margin: -10px 0 -20px 0;
    }

    .up {
      font-size: 17px !important;
      font-weight: normal;
    }

    .status {
      font-size: 17px !important;
      font-weight: normal;
      margin-bottom: -.1rem;
    }

    #alamat {
      margin-top: -15px;
      font-size: 13px;
    }

    #lbr {
      font-size: 17px;
      font-weight: bold;
    }

    .separator {
      border-bottom: 2px solid #616161;
      margin: -1rem 0 1rem;
    }

  }

  .container {
    padding: 0 1.5rem;
    margin: 0 auto;
    max-width: 1280px;
    width: 90%;
  }
</style>

<body onload="window.print()">
  <div class="container">
    <!-- Container START -->
    <div id="colres">
      <div class="disp">
        <img class="logodisp" src="<?= base_url() . '/assets/img/' . identitas('logo') ?>" />
        <h6 class="up">KEMENTRIAN AGAMA REPUBLIK INDONESIA</h6>
        <h5 class="up" id="nama">KANTOR KEMENTRIAN AGAMA KOTA MADIUN</h5><br />
        <h6 class="status">KANTOR KEMENTRIAN AGAMA KOTA MADIUN</h6>
        <span id="alamat">Jalan Raya Kediri Gg. Kwagean No. 04 Loceret Telp/Fax. (0358) 329806 Nganjuk 64471</span>
      </div>
      <div class="separator"></div>
      <table class="bordered" id="tbl">
        <tbody>
          <tr>
            <td class="tgh" id="lbr" colspan="5">LEMBAR DISPOSISI</td>
          </tr>
          <tr>
            <td id="right" width="18%"><strong>Indeks Berkas</strong></td>
            <td id="left" style="border-right: none;" width="57%">: <?= $data->indeks ?></td>
            <td id="left" width="25"><strong>Kode</strong> :<?= $data->kode ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Tanggal Surat</strong></td>
            <td id="left" colspan="2">: <?= tgl_indonesia($data->tgl_surat) ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Nomor Surat</strong></td>
            <td id="left" colspan="2">: <?= $data->no_surat ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Asal Surat</strong></td>
            <td id="left" colspan="2">: <?= $data->asal_surat ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Isi Ringkas</strong></td>
            <td id="left" colspan="2">: <?= $data->isi ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Diterima Tanggal</strong></td>
            <td id="left" style="border-right: none;">: <?= tgl_indonesia($data->tgl_diterima) ?></td>
            <td id="left"><strong>No. Agenda</strong> : <?= $data->no_agenda ?></td>
          </tr>
          <tr>
            <td id="right"><strong>Tanggal Penyelesaian</strong></td>
            <td id="left" colspan="2">: </td>
          </tr>
          <tr>
          <tr class="isi">
            <td colspan="2">
              <strong>Isi Disposisi :</strong><br /><?= $data->isi_disposisi ?>
              <div style="height: 50px;"></div>
              <strong>Batas Waktu</strong> : <?= tgl_indonesia($data->batas_waktu) ?><br />
              <strong>Sifat</strong> : <?= $data->sifat ?><br />
              <strong>Catatan</strong> :<br /> <?= $data->catatan ?>
              <div style="height: 25px;"></div>
            </td>
            <td><strong>Diteruskan Kepada</strong> : <br /> <?= $data->tujuan ?></td>
          </tr>
        </tbody>
      </table>
      <?php $nama_file = strtolower(str_replace('-', ' ', identitas('nama_pejabat'))) . '.png'; ?>
      <div id="lead">
        <p><?= strip_tags(identitas('jabatan')) ?></p>
        <img src="<?= site_url('assets/qr_disposisi/' . $nama_file) ?>" style="height:100px;height:100px">
        <div style="height: 50px;"></div>
        <p class="lead"><?= strip_tags(identitas('nama_pejabat'))  ?></p>
      </div>
    </div>
    <div class="jarak2"></div>
  </div>
</body>