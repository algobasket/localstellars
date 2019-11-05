<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content=" ixinium">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Site Title  -->
	<title>ixinium - ICO </title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/style.css?ver=104">

</head>

<body class="page-ath">

    <div class="page-ath-wrap">
        <div class="page-ath-content" style="background-color: #f2f3f1d1">
            <div class="page-ath-header">
							<a href="<?php echo base_url();?>" class="page-ath-logo">
									<img src="<?php echo base_url();?>/public/images/localstellars-logo2.png" srcset="<?php echo base_url();?>public/landing-2/images/logo.png 2x" alt="logo">
							</a>
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Reset password <span>If you forgot your password, well, then we’ll email you instructions to reset your password.</span></h2>
                <?php echo getFlash();?>
                <?php echo form_open('auth/forgot');?>
                    <div class="input-item">
                        <input type="text" placeholder="Your Email" class="input-bordered" name="email" required />
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <input type="submit" name="forgotPassword" class="btn btn-primary btn-block" value="Send Reset Link"/>
                        </div>
                        <div>
                            <a href="<?php echo base_url();?>auth/login">Return to login</a>
                        </div>
                    </div>
                    <div class="gaps-2x"></div>
                <?php echo form_close();?>
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
                   <img src="<?php //echo base_url();?>public/images/ath-gfx.png" alt="image">
               </div>
           </div>   -->
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
	<script src="<?php echo base_url();?>public/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php echo base_url();?>public/assets/js/script.js?ver=104"></script>
</body>
</html>
