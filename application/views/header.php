<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ALBUMSO.COM - CHIA SẺ KỶ NIỆM HẠNH PHÚC</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>public_html/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public_html/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public_html/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public_html/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public_html/css/bootstrap-select.min.css">
        <!-- Font used in template -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--font awesome icon -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public_html/images/favicon.ico" type="image/x-icon">
        <!-- Template style.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public_html/css/style.css">
        <script src="<?php echo base_url(); ?>public_html/js/jquery.min.js"></script> 
    </head>
    <body>
        <div class="collapse" id="searcharea">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn tp-btn-primary" type="button">Search</button>
                </span> </div>
        </div>
        <!-- /.top search -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 top-message">
                        <p>Welcome to Wedding Vendor.</p>
                    </div>
                    <div class="col-md-6 top-links">
                        <ul class="listnone">
                            <?php  if (isset($_SESSION['user']) && $_SESSION['user']['status_login'] == 1) : ?>
                                <li><a href="/admin/<?php echo isset($_SESSION['user']['_id']) ? $_SESSION['user']['_id'] : 0 ?>"><?php echo isset($_SESSION['user']['KV101']) ? $_SESSION['user']['KV101'] : $_SESSION['user']['NV101'] ?></a></li>
                                <li><a href="/login/logout">Thoát</a></li>
                            <?php else : ?>
                                <li><a href="/login/registry">Đăng ký</a></li>
                                <li><a href="<?php echo base_url() ?>login">Đăng nhập</a></li>
                            <?php endif; ?>
                            <li><a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-nav" id="headersticky">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>public_html/images/logo.png" alt="Wedding Vendors" class="img-responsive"></a> </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="<?php
                            if ($this->router->fetch_class() == 'home') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo base_url(); ?>home">Trang Home</a></li>
                            <li class="<?php
                            if ($this->router->fetch_class() == 'provider') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo base_url(); ?>provider">Danh Sách Studio</a></li>
                                <?php if (isset($_SESSION['user']['KV102']) && $_SESSION['user']['KV102'] == 'nguyenthanhduy91@gmail.com') : ?>
                                <li class="<?php
                                if ($this->router->fetch_class() == 'viewer') {
                                    echo 'active';
                                }
                                ?>"><a href="<?php echo base_url(); ?>viewer">Viewer</a></li>
                                <?php endif; ?>

                            <li class="<?php
                            if ($this->router->fetch_class() == 'place') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo base_url('place.html'); ?>">Địa Điểm Đẹp</a></li>

                            <li class="<?php
                            if ($this->router->fetch_class() == 'event') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo base_url(); ?>event">Sự Kiện Hot</a></li>
                            <li class="<?php
                            if ($this->router->fetch_class() == 'album') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo base_url(); ?>album">Album Đẹp</a></li>
                        </ul>
                    </div>

                    <!-- /.navbar-collapse --> 
                </nav>
            </div>
            <!-- /.container-fluid --> 

        </div><!-- navigation end -->