<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta name="robots" content="noindex">
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Site Title  -->
	<title><?php echo $this->lang->line('user_title');?></title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo $baseurl;?>/public/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo $baseurl;?>/public/assets/css/style.css">
	
</head>

<body class="page-user">
   
    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon">
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                </div>
                            </a>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                    <a class="topbar-logo" href="<?php echo $baseurl;?>backend/welcome">
                      <img src="<?php echo $baseurl;?>/public/landing/images/logo.png" srcset="<?php echo $baseurl;?>/public/landing/images/logo.png 2x" alt="logo">
                    </a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative">
                            <span class="user-welcome d-none d-lg-inline-block"><?php lang('common_welcome');?>! <?php echo cUser('name');?></span>
                            <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
            
                                <ul class="user-links">
                                    <li><a href="<?php echo $baseurl;?>backend/welcome/profile"><i class="ti ti-id-badge"></i><?php lang('common_myProfile');?></a></li>
                                    <li><a href="<?php echo $baseurl;?>backend/welcome/activity"><i class="ti ti-eye"></i><?php lang('common_activity');?></a></li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="<?php echo $baseurl;?>auth/logout"><i class="ti ti-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                </div>
            </div><!-- .container -->
        </div><!-- .topbar -->
    </div><!-- .topbar-wrap -->