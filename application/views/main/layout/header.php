<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/assets/vendor/datatables/datatables.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/main/assets/pbstrike.ico" type="image/x-icon">

</head>

<body>

    <div class="preloader" id="preloader">
        <div class="logo">
        </div>
        <div class="loader-frame">
            <div class="loader1" id="loader1"></div>
            <div class="circle"></div>
            <h6 class="wellcome"><span>PointBlank Strike</span></h6>
        </div>
    </div>
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!-- ========Header Section Starts Here======== -->
    <header class="header-one">
        <div class="container">
            <div class="header-top">
                <span class="left"></span>
                <ul>
                    <li>
                        <a href="#0"></a>
                    </li>
                    <li>
                        <a href="#0"></a>
                    </li>
                    <li>
                        <a href="#0"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper-2">
                    <div class="sticky-logo">
                        <a href="<?php echo base_url('home') ?>">
                            <img src="<?php echo base_url() ?>assets/main/assets/pbstrike.png" style="max-width:100px;" alt="logo">
                        </a>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="<?php echo base_url('home') ?>">HOME</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('download') ?>">DOWNLOAD</a>
                        </li>
                        <li class="d-none d-lg-block center-logo">
                            <div class="logo">
                                <a href="<?php echo base_url('home') ?>">
                                    <img src="<?php echo base_url() ?>assets/main/assets/pbstrike.png" style="max-width:150px;" alt="logo">
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">RANK</a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo base_url('player_rank') ?>">Player Rank</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('clan_rank') ?>">Clan Rank</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('admin_rank') ?>">Admin Rank</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        if (empty($_SESSION['uid'])) :
                            ?>
                            <li>
                                <a href="javascript:void(0)">LOGIN</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('login') ?>">Login</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('register') ?>">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                        endif;
                        if (!empty($_SESSION['uid'])) :
                        ?>
                            <li>
                                <a href="javascript:void(0)">USER AREA</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('404') ?>">Administrator</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('player_panel') ?>">Player Panel</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('player_panel/redeemcode') ?>">Redeem Code</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('player_panel/inventory') ?>">Inventory</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('home/logout') ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        endif;
                        ?>
                    </ul>
                    <div class="header-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========Header Section Ends Here======== -->