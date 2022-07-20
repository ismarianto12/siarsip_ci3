<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Maybank data Entri</title>
  <link rel="shortcut icon" href="<?= base_url('/assets/template') ?>/img/favicon.ico" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/template') ?>/css/bootstrap4.min.css">
  <script src="<?= base_url() ?>assets/template/plugins/components/jquery/dist/jquery.min.js"></script>


  <script type="text/javascript" src="<?= base_url('/assets/template') ?>/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('/assets/template') ?>/font-awesome-4.1.0/css/font-awesome.min.css" crossorigin="anonymous" />
  <script src="<?= base_url() ?>assets/template/js/login.js"></script>

  <script type="text/javascript" src="<?= base_url('/assets/template') ?>/dialog/bootbox.js"></script>
  <script>
    function base_url() {
      return '<?= base_url() ?>/';
    }
  </script>

  <script src="<?= base_url() ?>assets/template/js/login.js"></script>


  <style id="compiled-css" type="text/css">
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

    .border-md {
      border-width: 2px;
    }

    .btn-facebook {
      background: #405D9D;
      border: none;
    }

    .btn-facebook:hover,
    .btn-facebook:focus {
      background: #314879;
    }

    .btn-twitter {
      background: #42AEEC;
      border: none;
    }

    .btn-twitter:hover,
    .btn-twitter:focus {
      background: #1799e4;
    }



    /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

    body {
      min-height: 100vh;
    }

    .form-control:not(select) {
      padding: 1.5rem 0.5rem;
    }

    select.form-control {
      height: 52px;
      padding-left: 0.5rem;
    }

    .form-control::placeholder {
      color: #ccc;
      font-weight: bold;
      font-size: 0.9rem;
    }

    .form-control:focus {
      box-shadow: none;
    }

    /* EOS */
  </style>

  <script id="insert"></script>


</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3" style="
    background: orange;
">
      <div class="container">
        <!-- Navbar Brand -->
        <a href="#" class="navbar-brand">
          <center>

            <h3 class="box-title m-b-20 row" style="color:#fff">SIA Sudikap <br />(Surat + Surat Dinas dan Kearsipan)</h3>
          </center>
        </a>

      </div>
    </nav>
    <br />
  </header>


  <div class="container">
    <div class="row">

      <div class="col-md-8 align-items-center">
        <center>
          <img src="<?= base_url('assets/img/') . logo() ?>" alt="logo" width="80">
          <br />  <br />
          <h4 style="color:#000"><?= strtoupper(instansi('nama_instansi')) ?></h4>
        </center>
      </div>

      <div class="col-md-4" style="margin-top:-80px">
        <div id="notifikasi"></div>
        <form action="#" id="clogin" method="post">
          <div class="row">
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input id="username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md">
            </div>

            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-users text-muted"></i>
                </span>
              </div>
              <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
            </div>

            <!-- Submit Button -->
            <div class="form-group col-lg-12 mx-auto mb-0">
              <button class="btn btn-primary btn-block py-2" type="submit">
                <span class="font-weight-bold">Login</span>
              </button>
            </div>

            <div class="text-center w-100">
              <br /> <br />
              <p class="text-muted font-weight-bold">Lupa Password? <a href="#" class="text-primary ml-2"></a></p>
            </div>


          </div>
        </form>
      </div>

    </div>
  </div>
  </div>



</body>


</html>