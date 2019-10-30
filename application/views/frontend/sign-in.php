<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="algobasket">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Site Title  -->
	<title><?php echo $this->lang->line('auth_signin');?></title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/style.css?ver=104">
</head>

<body class="page-ath">
    
    <div class="page-ath-wrap">
        <div class="page-ath-content" style="background-color: goldenrod">
            <div class="page-ath-header">
                <a href="<?php echo base_url();?>" class="page-ath-logo">
                    <img src="<?php echo base_url();?>/public/landing-2/images/logo.png" srcset="<?php echo base_url();?>public/landing-2/images/logo.png 2x" alt="logo"></a> 
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading"><?php echo $this->lang->line('auth_page_ath_heading');?></h2>
                <p><?php echo $this->session->flashdata('notify');?></p>
                <form method="POST" action="<?php echo base_url();?>auth/login">
                    <div class="input-item">
                        <input type="text" placeholder="Your Email" class="input-bordered" name="email" required>
                    </div>
                    <div class="input-item">
                        <input type="password" placeholder="Password" class="input-bordered" name="password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-item text-left">
                            <input class="input-checkbox input-checkbox-md" id="remember-me" type="checkbox">
                            <label for="remember-me"><?php echo $this->lang->line('auth_page_ath_heading');?></label>
                        </div>
                        <div>
                            <a href="<?php echo base_url();?>auth/forgot"><?php echo $this->lang->line('auth_forgot_pass');?></a>
                            <div class="gaps-2x"></div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="login" value="<?php echo $this->lang->line('auth_signin');?>" >


                    
               <!--  <div class="sap-text">
                    <span><?php echo $this->lang->line('auth_or_sign_in_with');?></span>
                </div> -->

                <!-- <ul class="row guttar-20px guttar-vr-20px">
                    <li class="col"><a href="<?php echo base_url();?>auth/facebook" class="btn btn-outline btn-dark btn-facebook btn-block"><em class="fab fa-facebook-f"></em><span>Facebook</span></a></li>
                    <li class="col"><a href="<?php echo base_url();?>auth/google" class="btn btn-outline btn-dark btn-google btn-block"><em class="fab fa-google"></em><span>Google</span></a></li>
                </ul> -->
                
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">
                    <?php echo $this->lang->line('auth_dont_have_an_account');?> 
                    <a href="<?php echo base_url();?>Auth/signup"> <strong><?php echo $this->lang->line('auth_signup_here');?></strong></a>
                </div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="regular-page.html"><?php echo $this->lang->line('site_privacy_policy');?></a></li>
                    <li><a href="regular-page.html"><?php echo $this->lang->line('site_terms');?></a></li>
                    <li><?php echo $this->lang->line('site_copyright');?></li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx">
           <!-- <div class="w-100 d-flex justify-content-center">
               <div class="col-md-8 col-xl-5">
                   <img src="<?php //echo base_url();?>/public/images/ath-gfx.png" alt="image">
               </div>
           </div>   -->          
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
	<script src="<?php echo base_url();?>/public/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php echo base_url();?>/public/assets/js/script.js?ver=104"></script>
</body>
</html>
