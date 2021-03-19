<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/datatables/datatables.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
        <ul class="navbar-nav pull-left">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?php echo base_url('404/home') ?>" class="brand-link text-center">
            <span class="brand-text font-weight-light">POINT BLANK STRIKE</span>
        </a>
        <div class="sidebar">
            <nav class="mt-5">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?php echo base_url('404/home') ?>" class="nav-link <?php if ($header == "Dashboard"){echo 'active';} ?>">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "player"){echo 'menu-open';} ?>">
                        <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "player"){echo 'active';} ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Player <i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('404/player') ?>" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "player" && $header == "Players"){echo 'active';} ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Players</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('404/player/tambah') ?>" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "player" && $header == "Tambah Player"){echo 'active';} ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Players</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "redeemcode"){echo 'menu-open';} ?>">
                        <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "redeemcode"){echo 'active';} ?>">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Redeem Code <i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('404/redeemcode') ?>" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "redeemcode" && $header == "Redeem Code"){echo 'active';} ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Redeem Code</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('404/redeemcode/tambah') ?>" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "redeemcode" && $header == "Tambah Redeem Code"){echo 'active';} ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Redeem Code</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link <?php if ($this->uri->segment(1) == "404" && $this->uri->segment(2) == "log"){echo 'active';} ?>">
                            <i class="nav-icon fa fa-history"></i>
                            <p>Log</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('404/home/logout') ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php echo $header ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">