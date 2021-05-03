<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Akses Aplikasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="icon" href="<?= base_url('assets/img/' . icon()) ?>" />
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/plugins/iCheck/square/blue.css">
  <script src="<?= base_url() ?>assets/template/plugins/components/jquery/dist/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript">
    function base_url() {
      return '<?= base_url() ?>';
    }
  </script>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template/css/sweet-alert.css">
  <script src="<?= base_url() ?>assets/template/js/sweet-alert.js"></script>
  <script src="<?= base_url() ?>assets/template/js/login.js"></script>
</head>

<body class="hold-transition login-page" style="
    background: url('https://fbc-canyon.org/wp-content/uploads/2018/02/coloured-working-scene_1009-224.jpg');
    background-size: cover;
    background-repeat: no-repeat;
">


  <div class="col-md-8">

  </div>
  <div class="col-md-4" style="
    background: #fff;
    height: 640px;
    overflow: hidden;
">

    <div class="login-box">
      <div class="login-logo">
        <br />
        <center>

          <h3 class="box-title m-b-20">Aplikasi Sudikap <br />(Surat + Surat Dinas dan Kearsipan)</h3>
        </center>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login Akses Aplikasi</p>

        <div id="notifikasi"></div>
        <form id="clogin" action="#" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username ..">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

            <div class="col-xs-4">
              <button type="submit" class="btn bg-green btn-flat margin btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </div>
  <!-- jQuery 2.1.4 -->
  <script src="<?= base_url() ?>/assets/template_lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?= base_url() ?>/assets/template_lte/bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= base_url() ?>/assets/template_lte/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>