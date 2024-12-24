<?php
$modul = [
    [
        'id' => 1,
        'nama' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'tipe' => 'single',
        'url' => 'dashboard/index',
    ],
    [
        'id' => 2,
        'nama' => 'Management',
        'icon' => 'fas fa-cogs',
        'tipe' => 'dropdown',
        'url' => '',
        'menu' => [
            ['id' => 1, 'menu_nama' => 'Users', 'url' => 'management/users'],
            ['id' => 2, 'menu_nama' => 'Roles', 'url' => 'management/roles'],
        ],
    ],
];

$loginsession = [
    'access_control' => [
        'modul' => [1, 2],
        'menu' => [1],
    ],
];

$status_kirim = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Prima Stars</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/admin/awesome/css/all.css"> -->

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/admin/assets/css/components.css"> -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/helper/css/custom.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/modules/select2/select2.css">
    <link href="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/gif">

    <style type="text/css">
        .rounded-pill {
            border-radius: 50rem !important
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .badge {
                transition: none
            }
        }

        a.badge:focus,
        a.badge:hover {
            text-decoration: none
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #0062cc
        }

        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #545b62
        }

        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #1e7e34
        }

        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #117a8b
        }

        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #212529;
            background-color: #d39e00
        }

        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #bd2130
        }

        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        a.badge-light:focus,
        a.badge-light:hover {
            color: #212529;
            background-color: #dae0e5
        }

        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #1d2124
        }

        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .iconClass {
            position: relative;
        }

        .iconClass span {
            position: absolute;
            top: 0px;
            right: 0px;
            display: block;
        }

        .modal-dialog {
            max-width: 800px;
        }

        .btn-detail {
            background-color: #ff8a00;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-detail:hover {
            background-color: #e07a00;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #333;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            border-bottom: 3px solid #ff8a00;
            color: #ff8a00;
        }

        .header-container {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .tab-content {
            margin-top: 10px;
        }

        .container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #007bff;
            margin: 0 auto 20px auto;
        }
    </style>

</head>

<body oncontextmenu="return false;">
    <div id="app">

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" id="search_key">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Hasil Pencarian
                            </div>
                            <div id="item_pencarian">
                                <div class="search-item">
                                    <a href="#"><i class="fa fa-eye"></i> &nbsp; Silahkan utk di-input...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item mr-3">
                    <li class="nav-item mr-3">
                        <a href="index/dashboard" class="nav-link nav-icon iconClass"
                            <i class="fas fa-bell"></i>

                        </a>
                    </li>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>assets/admin/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('loginsession')['username'] ?? 'Guest' ?></div>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 200px;">
                            <a href="#my_profile" class="dropdown-item has-icon" data-toggle="modal">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="#setting/ubah_password" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Change Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item has-icon text-danger" href="javascript:void(0);"
                                onclick="handleLogout()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- Main Sidebar -->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url('/dashboard') ?>"><img src="<?= base_url() ?>assets/admin/assets/img/Pkss.png" alt="logo" width="150" class="mb-5 mt-3"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('/dashboard') ?>">PKSS</a>
                    </div>

                    <!-- Sidebar -->
                    <ul class="sidebar-menu">
                        <?php foreach ($modul as $key) {
                            if (in_array($key['id'], $loginsession['access_control']['modul'])) { ?>
                                <?php if ($key['tipe'] == 'dropdown') { ?>
                                    <li class="nav-item dropdown" id="top_<?= $key['id'] ?>">
                                        <a href="javascript:void(0)" onclick="modul(this)" class="nav-link has-dropdown">
                                            <i class="<?= $key['icon'] ?>"></i><span><?= $key['nama'] ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($key['menu'] as $menu) {
                                                if (in_array($menu['id'], $loginsession['access_control']['menu'])) {
                                                    $url_men = explode("/", $menu['url']);
                                            ?>
                                                    <li class="menu-link" id="<?= $url_men[0] . '-' . $url_men[1] ?>">
                                                        <a class="nav-link" onclick="menu(this)" id="sub_<?= $menu['id'] ?>" href="#<?= $menu['url'] ?>"><?= $menu['menu_nama'] ?></a>
                                                    </li>
                                            <?php }
                                            } ?>
                                        </ul>
                                    </li>
                                <?php } else {
                                    $url_mod = explode("/", $key['url']);
                                ?>
                                    <li class="nav-item single-el" id="<?= $url_mod[0] . '-' . $url_mod[1] ?>">
                                        <a href="#<?= $key['url'] ?>" onclick="single(this)" class="nav-link">
                                            <i class="<?= $key['icon'] ?>"></i><span><?= $key['nama'] ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                        <?php }
                        } ?>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Logout
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Content -->
            <div id="ajax-content">
                <?= $this->renderSection('content') ?>
            </div>

            <!-- Foooter -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; PT. PKSS 2024 <div class="bullet"></div> Design By <a href="#dashboard/Home">Divisi IT</a>
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>
</body>

</html>

<!-- Profile -->
<div class="modal fade" tabindex="-1" role="dialog" id="my_profile">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col-md-2 col-sm-4">
                        <div class="avatar-item mb-0">
                            <img alt="image" src="<?= base_url() ?>assets/admin/assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                            <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-8">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td class="text-left" width="2%"> : </td>
                                <td><b><?= $loginsession['nama'] ?? 'Guest' ?></b></td>

                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td class="text-left" width="2%"> : </td>
                                <td><b><?= $loginsession['username'] ?? 'Guest' ?></b></td>
                            </tr>
                            <tr>
                                <td>Unit Kerja</td>
                                <td class="text-left" width="2%"> : </td>
                                <td><b><?= $loginsession['nama_uker'] ?? 'Guest' ?></b></td>
                            </tr>
                            <tr>
                                <td>Jabatan&nbsp;</td>
                                <td class="text-left" width="2%"> :&nbsp;</td>
                                <td><b><?= $loginsession['nama_jabatan'] ?? 'Guest' ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Sweet Alert Handle Logout -->
<script>
    function handleLogout() {
        const swalType = "<?= ($status_kirim != 0) ? 'error' : 'warning'; ?>";
        const swalText = "<?= ($status_kirim != 0) ? 'Masih Terdapat Data Yang Belum Dikirim' : 'Apakah anda yakin akan keluar ?'; ?>";
        const swalTitle = "<?= ($status_kirim != 0) ? 'Masih Terdapat Data Yang Belum Dikirim' : 'Apakah anda yakin akan keluar ?'; ?>";

        swal({
            type: swalType,
            title: swalTitle,
            text: swalText,
            confirmButtonColor: '#ff9900',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Sign Out!',
            cancelButtonText: 'Tidak',
            showCancelButton: true,
            closeOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm) {
            if (isConfirm) {
                window.location.href = '<?= base_url('/'); ?>';
            }
        });
    }
</script>

<!-- General JS Scripts -->
<script type="text/javascript">
    (function() {
        var css = document.createElement('link');
        css.href = '<?= base_url() ?>assets/admin/awesome/css/all.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(css);
    })();
</script>
<script type="text/javascript">
    (function() {
        var css = document.createElement('link');
        css.href = '<?= base_url() ?>assets/admin/assets/css/components.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(css);
    })();
</script>
<script type="text/javascript">
    (function() {
        var css = document.createElement('link');
        css.href = '<?= base_url() ?>assets/helper/css/custom.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(css);
    })();
</script>
<script src="<?php echo base_url(); ?>assets/admin/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url(); ?>assets/admin/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url() ?>assets/admin/assets/js/scripts.js"></script>
<script src="<?= base_url() ?>assets/admin/assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/helper/js/custom_helper.js"></script>


<!-- Page Specific JS File -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/modules/index.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/xy.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/radar.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/modules/Animated.js"></script>

<script>
    function modul(el) {
        elementClass = el.parentElement.classList;
        if (elementClass.length === 3) {
            el.parentElement.classList.remove("active");
        } else {
            el.parentElement.classList.add("active");
        }
        // console.log(elementClass[0]);
    }

    function menu(el) {
        elementClass = el.parentElement.classList;
        $("." + elementClass[0]).removeClass("active");
        $(".single-el").removeClass("active");
        el.parentElement.classList.add("active");
        // console.log(elementClass[0]);
    }

    function single(el) {
        el.parentElement.classList.add("active");
        $(".menu-link").removeClass("active");
    }

    $("#search_key").keyup(function(event) {
        if (event.keyCode === 40) {
            $("#search-item-0").focus();
            // $("#search_key").blur();
        } else {
            $.ajax({
                url: "<?= base_url() ?>Search/search",
                type: "POST",
                data: {
                    "key": $("#search_key").val()
                },
                dataType: "JSON",
                success: function(data) {
                    var string = "";
                    for (i = 0; i < data.length; i++) {
                        string = string + '<div class="search-item">' +
                            '<a id="search-item-' + i + '" href="#' + data[i].url + '"><i class="' + data[i].icon + '"></i> &nbsp; ' + data[i].nama + '</a>' +
                            '</div>';
                    }
                    $("#item_pencarian").html(string);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
        }
    });

    var ajax_url;

    $(document).ready(function() {

        var ajax_url = location.hash.replace(/^#/, '');
        var ajax_url = location.hash.replace(/^#/, '');
        var class_mod = ajax_url.split("/");
        $("#" + class_mod[0] + "-" + class_mod[1]).addClass("active");
        if ($("#" + class_mod[0] + "-" + class_mod[1]).parent().attr("class") == "dropdown-menu") {
            $("#" + class_mod[0] + "-" + class_mod[1]).parent().addClass("active");
        };
        if (ajax_url != '') {
            LoadAjaxContent(ajax_url);
        }

    });

    function LoadAjaxContent(url) {
        $('#ajax-content').html("<div class='main-content'><section class='section'><div class='section-header'><i class='fa fa-spinner fa-pulse'></i></div></section></div>");
        $.ajax({
            mimeType: 'text/html; charset=utf-8', // ! Need set mimeType only when run from local file
            url: url,
            type: 'GET',
            success: function(data) {
                $('#ajax-content').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (errorThrown == "Unauthorized") {
                    swal({
                        title: "Security Warning!",
                        text: "Sesi habis, mohon login kembali!",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Okay!",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    }, function(isConfirm) {
                        if (isConfirm) {
                            window.location.replace("<?php echo base_url() ?>user_auth/login");
                        }
                    });
                }

                console.log(textStatus);
            },
            dataType: "html",
            async: false
        });
    }

    $(window).on('hashchange', function() {
        var ajax_url = location.hash.replace(/^#/, '');
        document.title = ajax_url;
        LoadAjaxContent(ajax_url);

    });
</script>