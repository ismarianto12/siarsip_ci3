<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="icon" href="<?= base_url('assets/img/' . icon()) ?>" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template/css/sweet-alert.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template_lte/dist/css/pace.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/template_lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <script src="https://project.ptlmp.my.id/assets/js//2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">


</head>

<script type="text/javascript">
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            autoDisplay: false
        }, 'google_translate_element2');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
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
        background: #ddd;
        margin-bottom: 20px;
        margin-left: 10px;
    }

    div.dt-buttons {
        clear: both;
    }
</style>


<script type="text/javascript">
    function GTranslateGetCurrentLang() {
        var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
        return keyValue ? keyValue[2].split('/')[2] : null;
    }

    function GTranslateFireEvent(element, event) {
        try {
            if (document.createEventObject) {
                var evt = document.createEventObject();
                element.fireEvent('on' + event, evt)
            } else {
                var evt = document.createEvent('HTMLEvents');
                evt.initEvent(event, true, true);
                element.dispatchEvent(evt)
            }
        } catch (e) {}
    }

    function doGTranslate(lang_pair) {
        if (lang_pair.value) lang_pair = lang_pair.value;
        if (lang_pair == '') return;
        var lang = lang_pair.split('|')[1];
        if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
        var teCombo;
        var sel = document.getElementsByTagName('select');
        for (var i = 0; i < sel.length; i++)
            if (/goog-te-combo/.test(sel[i].className)) {
                teCombo = sel[i];
                break;
            } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
            setTimeout(function() {
                doGTranslate(lang_pair)
            }, 500)
        } else {
            teCombo.value = lang;
            GTranslateFireEvent(teCombo, 'change');
            GTranslateFireEvent(teCombo, 'change')
        }
    }
</script>

<script type="text/javascript">
    $(function() {
        // $('.callout').fadeOut();
        var reload = 'yes';
        $.post('<?= base_url('tsuratmasuk/get_notification') ?>', {
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
                url: '<?= base_url('tsuratmasuk/get_list') ?>',
                type: 'post',
                chace: false,
                success: function(data) {
                    $('#surat_masuk_list').html(data);
                },
                error: function(data) {
                    $('#surat_masuk_list').html(data);
                }
            });
        })
    });
</script>

<?php $data = $this->properti->user($this->session->id_user); ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= site_url('') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
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
                                <li class="header">You have <div class="surat_notif"></div> messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <div id="surat_masuk_list" style="padding: 0px 20px;"></div>

                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>

                        <li class="dropdown notifications-menu">
                            <a href="javascript:void(0);" onclick="doGTranslate('id|id');return false;" title="Indonesian" class="gflag nturl dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                                <img src="<?= base_url('assets/template/plugins/images/id.png') ?>" style="height:20px">
                            </a>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="javascript:void(0);" onclick="doGTranslate('id|en');return false;" title="English" class="gflag nturl dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                                <img src="<?= base_url('assets/template/plugins/images/en.png') ?>" style="height:20px">
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('assets/img/foto/' . $data['foto']) ?>" class="user-image" alt="User Image" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                                <span class="hidden-xs"><?= $data['nama'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('assets/img/foto/' . $data['foto']) ?>" class="img-circle" alt="User Image" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                                    <p>
                                        <?= ucfirst($this->session->userame) ?> - <?= ucfirst($this->session->level) ?>
                                        <small>Login terakkhir : <?= date('Y-m-d H:i:s')  ?></small>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= base_url('profile') ?>" class="btn bg-red btn-flat margin btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('logout') ?>" class="btn bg-red btn-flat margin btn-flat">Sign out</a>
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
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url('assets/img/foto/' . $data['foto']) ?>" class="img-circle" alt="User Image" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                    </div>
                    <div class="pull-left info">
                        <p><?= $this->session->username ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <?= $this->properti->menu_app('Bottom', $this->session->level) ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><?= ucfirst(strtolower($judul)) ?></li>
                </ol>
            </section>
            <!-- Small boxes (Stat box) -->
            <?php
            //dont change by hand 
            if ($this->uri->segment(1) == 'dasboard') {
                echo $contents;
            } else { ?>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <?= $contents ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
            <!-- /.content -->
        </div><!-- /.content-wrapper -->
        <footer class="main-footer">

            <div id="google_translate_element2"></div>
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.0
            </div>
        </footer>


    </div>


    <script src="<?= base_url() ?>/assets/template_lte/plugins/pace/pace.js"></script>
    <script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/template/js/sweet-alert.js"></script>

    <script src="<?= base_url() ?>assets/template/plugins/components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/template_lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

    <script type="text/javascript">
        $(document).ajaxStart(function() {
            Pace.restart({
                catchupTime: 100,
                initialRate: .03,
                minTime: 250,
                ghostTime: 100,
                maxProgressPerFrame: 20,
                easeFactor: 1.25,
                startOnPageLoad: true,
                restartOnPushState: true,
                restartOnRequestAfter: 500,
                target: 'body',
                elements: {
                    checkInterval: 100,
                    selectors: ['body']
                },
                eventLag: {
                    minSamples: 10,
                    sampleCount: 3,
                    lagThreshold: 3
                },
                ajax: {
                    trackMethods: ['GET'],
                    trackWebSockets: true,
                    ignoreURLs: []
                }
            })


        });
    </script>
    <script src="<?= base_url() ?>/assets/template_lte/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src="<?= base_url() ?>/assets/template_lte/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/template_lte/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/assets/template_lte/dist/js/demo.js"></script>
</body>

</html>