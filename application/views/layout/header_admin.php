<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Inbox</title>

    <!-- Fontfaces CSS-->
    <!-- <link href="css/font-face.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/css/font-face.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet"
        media="all">
    <!-- <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>" rel="stylesheet"
        media="all">
    <!-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <!-- <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <!-- <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet"
        media="all">
    <!-- <link href="vendor/wow/animate.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/slick/slick.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <!-- <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <!-- <link href="css/theme.css" rel="stylesheet" media="all"> -->
    <link href="<?php echo base_url('assets/css/theme.css'); ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
                            <img src="<?php echo base_url('assets/images/icon/logo.png'); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="Dashboard/index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-users"></i>Members</a>
                        </li>
                        <li>
                            <a href="Product/index">
                                <i class="fas fa-chart-bar"></i>Products</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <!-- <i class="fas fa-copy"></i>Pages</a> -->
                                <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list"> -->
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                    </li>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="<?php echo base_url('admin/dashboard');?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/profile');?>">
                                <i class="fas fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/Users/index');?>">
                                <i class="fas fa-users"></i>Employee</a>
                        </li>
                        <li class="has-sub">
                            <!-- <a href="Product/index"> -->
                            <a href="<?php echo base_url('admin/Products/index');?>">
                                <i class="fas fa-chart-bar"></i>Product</a>
                        </li>
                        
                        <li class="has-sub">
                            <a href="<?php echo base_url('admin/List_Product/index');?>">
                                <i class="far fa-check-square"></i>Product Stock</a>
                        </li>
                        <li class="has-sub">
                            <a href="<?php echo base_url('admin/List_Stock/index');?>">
                                <i class="far fa-check-square"></i>Material Stock</a>
                        </li>
                        <li class="has-sub">
                            <a href="<?php echo base_url('#');?>">
                                <i class="far fa-check-square"></i>Vendor</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->