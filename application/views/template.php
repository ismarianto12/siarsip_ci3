<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$judul?></title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="icon" href="<?=base_url('assets/img/' . icon())?>" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/dist/css/template.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/css/sweet-alert.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/frontend/dist/css/pace.min.css">

    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?=base_url('assets/frontend/plugins/datatables')?>/dataTables.bootstrap.min.css">

    <script src="<?=base_url('assets/template/plugins/components/jquery/dist/jquery.min.js')?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>

    <script src="<?=base_url()?>/assets/frontend/dist/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/dist/css/datepicker.css">
    <script src="<?=base_url()?>assets/template/plugins/components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/template/js/sweet-alert.js"></script>

    <!-- notif that show -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/frontend/dist/js/confirm/jquery-confirm.min.css">
    <script src="<?=base_url()?>/assets/frontend/dist/js/confirm/jquery-confirm.min.js"></script>

</head>

<script type="text/javascript">
    function base_url() {
        return '<?=base_url()?>';
    }
</script>

<style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {

        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        width: 8px;
        background: rgb(155, 154, 154);
    }

    .dt-buttons {
        padding: 10px 10px 10px;
        background: #fff;
        margin-bottom: 20px;
        margin-left: 10px;
    }

    div.dt-buttons {
        clear: both;
    }
</style>
<script type="text/javascript">
    $(function() {
        // $('.callout').fadeOut();
        var reload = 'yes';
        $.post('<?=base_url('tsuratmasuk/get_notification')?>', {
            reload: reload
        }, function(respond) {
            $('.surat_notif').html(respond);
        });
    });
    /*set interval function*/
    $(function() {
        $('#surat_masuk_list').html('<div class="callout callout-info">Load data ...</div>');
        $('#notifikasi_not').click(function() {
            $.ajax({
                url: '<?=base_url('tsuratmasuk/get_list')?>',
                type: 'post',
                chace: false,
                success: function(data) {
                    $('#surat_masuk_list').html(data);
                },
                error: function(data) {
                    $('#surat_masuk_list').html(data);
                }
            });
        });

        // get detail clik
        $('#detailss').on('click', function(e) {
            e.preventDefault();
            link = $(this).attr('to');
            alert(link);

        })
    });

    function detailData(n) {
        $.dialog({
            title: 'Detail surat masuk',
            content: 'url:<?=base_url('tsuratmasuk/pagedata');?>/' + n,
            animation: 'scale',
            columnClass: 'large',
            closeAnimation: 'scale',
            backgroundDismiss: true,
        });
    }
</script>

<?php $data = $this->properti->user($this->session->id_user);?>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?=site_url('')?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>Strator</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu" id="notifikasi_not">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">
                                    <div class="surat_notif"></div>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header" style="
    display: flex;
">You have <div class="surat_notif"></div> messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <div id="surat_masuk_list" style="padding: 0px 20px;"></div>

                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?=base_url('assets/img/foto/' . $data['foto'])?>" class="user-image" alt="User Image" onerror="this.onerror=null;this.src='<?=base_url('assets/img/no_image.jpg')?>';">
                                <span class="hidden-xs"><?=$data['nama']?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?=base_url('assets/img/foto/' . $data['foto'])?>" class="img-circle" alt="User Image" onerror="this.onerror=null;this.src='<?=base_url('assets/img/no_image.jpg')?>';">
                                    <p>
                                        <?=ucfirst($this->session->username)?> - <?=ucfirst($this->session->level)?>
                                        <small>Login terakkhir : <?=date('Y-m-d H:i:s')?></small>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?=base_url('profile')?>" class="btn bg-red btn-flat margin btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?=base_url('logout')?>" class="btn bg-red btn-flat margin btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <!-- <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <!-- <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?=base_url('assets/img/foto/' . $data['foto'])?>" class="image-circle image-responsive" alt="User Image" onerror="this.onerror=null;this.src='<?=base_url('assets/img/no_image.jpg')?>';">
                        <br /> <br />
                    </div>
                    <div class="pull-left info">
                        <p><?=$this->session->username?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        <br />
                    </div>
                </div> -->

                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <?=$this->properti->menu_app('Bottom', $this->session->level)?>
                    <div class="clearfix"></div>

                    <br /><br /><br />

                </ul>

            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <?php if ($this->uri->segment(1) == 'dasboard') {?>
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>

                <?php }?>
                <br />
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><?=ucfirst(strtolower($judul))?></li>
                </ol>
            </section>
            <!-- Small boxes (Stat box) -->
            <?php
//dont change by hand
if ($this->uri->segment(1) == 'dasboard') {
    echo $contents;
} else {?>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">

                                    <?=$contents?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php }?>
            <!-- /.content -->
        </div><!-- /.content-wrapper -->



    </div>
    <script src="<?=base_url('assets/template/js/aplikasi.js')?>"></script>


    <script src="<?=base_url()?>/assets/frontend/plugins/pace/pace.js"></script>
    <script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>
    <script src="<?=base_url('assets/template/js/jquery-ui.1.11.4.min.js')?>"></script>
    <script src="<?=base_url('assets/template/js/jquery.slimscroll.js')?>"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

    <script src="<?=base_url()?>/assets/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>


    <script src="<?=base_url()?>/assets/frontend/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>/assets/frontend/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>/assets/frontend/dist/js/demo.js"></script>



</body>

</html>