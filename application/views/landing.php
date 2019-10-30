<!DOCTYPE html>
<html lang="en" xml:lang="en">    
<head>       
    <meta charset="UTF-8">  
    <!-- Responsive Meta -->                    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="images/bookmark.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> 
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Website Title -->
    <title><?php echo $this->lang->line('site_title');?></title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/css/fontawesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/css/owl.carousel.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>public/landing/css/responsive.css" type="text/css"/>
     <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
</head>
<body>
    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 logo">
                        <a href="cp-aluminium.html" title="Cp Aluminium">
                            <img class="light" src="<?php echo base_url();?>public/landing/images/logo.png" alt="Cp Aluminium">
                            <img class="dark" src="<?php echo base_url();?>public/landing/images/dark-logo.png" alt="Cp Aluminium">
                        </a>
                    </div>
                    <div class="col-sm-8 main-menu">
                        <div class="menu-icon">
                          <span class="top"></span>
                          <span class="middle"></span>
                          <span class="bottom"></span>
                        </div>
                        <nav>
                            <ul>
                                <li class="active"><a href="#top"><?php echo $this->lang->line('site_home');?></a></li>
                                <li><a href="#about"><?php echo $this->lang->line('site_about_ico');?></a></li>
                                <li><a href="#token"><?php echo $this->lang->line('site_token');?></a></li>
                                <li><a href="#roadmap"><?php echo $this->lang->line('site_roadmap');?></a></li>
                                <li><a href="#team"><?php echo $this->lang->line('site_team');?></a></li>
                                <li><a href="#press"><?php echo $this->lang->line('site_press');?></a></li>
                                <?php if(cUser('userId')){ ?>
                                <li class="nav-btn"><a href="<?php echo base_url();?>welcome"><?php echo $this->lang->line('common_account');?></a></li>
                                <?php }else{ ?>
                                <li class="nav-btn"><a href="<?php echo base_url();?>auth/login"><?php echo $this->lang->line('site_signin');?></a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->

        <!-- Content Section Start -->   
        <div class="midd-container">
            <!-- Hero Section Start -->   
            <div class="hero-main white-sec" style="background-image: url(<?php echo base_url();?>public/landing/images/banner.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 hero-left">
                            <div class="sec-title">
                               <?php echo $this->lang->line('site_header_title');?>
                            </div>
                            <p><?php echo $this->lang->line('site_header_subtitle');?></p>
                            <div class="hero-btns">
                                <a href="#" class="btn"><?php echo $this->lang->line('site_whitepaper');?></a>
                                <a href="#" class="btn btn2"><?php echo $this->lang->line('site_product_intro');?></a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="pre-sale-timer">
                                <div>
                                <h3><?php echo $this->lang->line('site_presale_will_end_in');?></h3>
                                <div id="clock"></div>
                                <div class="hero-right-btn">
                                    <?php if(cUser('userId')){ ?>
                                    <a class="btn" href="<?php echo base_url();?>token/buyToken"><?php echo $this->lang->line('common_buyTokens');?></a>
                                    <?php }else{ ?>
                                     <a class="btn" href="<?php echo base_url();?>auth/signup"><?php echo $this->lang->line('site_register_and_buy_token');?></a>
                                    <?php } ?>
                                </div>
                                <div class="rang-slider-main">
                                    <div class="rang-slider-toltip">
                                        <span><?php echo $this->lang->line('site_softcap');?> <strong>$0</strong></span>
                                        <span><?php echo $this->lang->line('site_hardcap');?> <strong>$191,000,000</strong></span>
                                    </div>
                                    <div class="rang-slider">
                                        <div class="rang-line">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="rang-slider-total">
                                       <span><?php echo $this->lang->line('site_total_raised');?>: <strong>$0</strong></span>
                                       <div class="rangTotal">0<small>%</small></div>
                                    </div>
                                </div>
                                <div class="we-accept-section">
                                    <h5><?php echo $this->lang->line('site_we_accept');?>:</h5>
                                    <ul>
                                        <li><span><i class="fab fa-paypal"></i></span></li>
                                        <li><span><i class="fab fa-btc"></i></span></li>
                                        <li><span><i class="fab fa-ethereum"></i></span></li>
                                        <li><span><i class="fa fa-credit-card"></i></span></li>
										<li><span><i class="fas fa-euro-sign"></i></span>
										<li><span><i class="fas fa-dollar-sign"></i></span>
										<li><span><i class="fas fa-pound-sign"></i></span>
										<li><span><i class="fas fa-yen-sign"></i></span>
										
								  </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Section End -->   
            <!-- Brand logo slider -->
            <div class="brand-logo-slider">
                <div class="container">
                    <div class="brand-logos owl-carousel">
                        <div class="item"><img src="<?php echo base_url();?>public/landing/images/brand-logo1.png" alt="Brand Logo 1" /></div>
                        <div class="item"><img src="<?php echo base_url();?>public/landing/images/brand-logo2.png" alt="Brand Logo 2" /></div>
                        <div class="item"><img src="<?php echo base_url();?>public/landing/images/brand-logo3.png" alt="Brand Logo 5" /></div>
                        <div class="item"><img src="<?php echo base_url();?>public/landing/images/brand-logo4.png" alt="Brand Logo 4" /></div>
                        <!-- <div class="item"><img src="images/brand-logo3.png" alt="Brand Logo 3" /></div> -->
                    </div>
                </div>
            </div>
            <!-- Brand logo end -->
            <!--About Start -->
            <div class="about-section p-tb" id="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 about-left">
                             <div class="sec-title"><h3>What is Ixinium?</h3></div>
                             <h5>Background of the Ixinium vision is based on over 4 years studies of fiat currencies, financial bank
instruments, trading, market making, banking world overall and cryptocurrencies.</h5>
                             <p>In these studies primary
focus was to find questions of “why”, regarding of clients investments safety, transparency for the clients,
client protection and structure of the asset values behind the actual product. </p>
                             <p>These studies showed us, that
in many cases words as transparent and clients investments safety was fully set on the side or even non
insisting. After pointing out several issues, Project Ixinium started to have a base structure, what is missing
from the market and how it should work.</p>
                             <a class="watch-link" href="#">
                                <i class="fas fa-play"></i>
                                <span><strong>Watch video</strong> About Ixinium</span> 
                            </a>

                        </div>
                        <div class="col-md-6 about-right order-first order-md-last">
                            <img src="<?php echo base_url();?>public/landing/images/about-img.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
            <!--About end -->
            <!-- Our Mission Start -->
            <div class="our-mission p-t">
                <div class="container">
                    <div class="sec-title text-center"><h3>Our Mission</h3></div>
                    <div class="sub-txt text-center">
                        <p>Ixinium, a crypto-financial hybrid, while Ixinium has better client asset protection mechanism than any bank
in the world can offer, usage of Ixinium cryptocurrency creates also value benefits to all it's users, while
been insured from full value.
The vision of Ixinium is to deliver decentralized and transparent asset backed cryptocurrency, which is fully
insured for replacement value. With the evolution of blockchain, transparency can be taken to the very own
levels. Price volatility, limiting cryptocurrencies holder's desire to be used as a tender is minalized in Ixinium.
 </p>
                    </div>
                </div>
                <div class="our-mission-boxes row">
                    <div class="col">
                        <span>01.</span>
                        <p>Cryptocurrency what is packed by precious metals, blockchain transparency and auditable transactions.
Fully transparent physical precious metals auditing to proof for everyone Ixinium's assets structure and
market value 24/7, being insured with will value by Lloyd's of London making Ixinium more safer than any
bank in the world, we can say that Ixinium is The Solution. Ixinium cryptocurrency is backed with gold, silver,
palladium and platinum.
Precious metals vaulting run by Brinks, Loomis and Malca-Amit. Ixinium uses only LBMA membership
vaulting partners. </p>
                        <h4>100% based on physical precious metals</h4>
                    </div>
                    <div class="col">
                        <span>02.</span>
                        <p>Precious metals are audited by Inspectorate. Inspectorate was acquired by Bureau Veritas in 2010 as part of
its successful global commodities strategy. With capabilities in an extensive range of commodities,
Inspectorate provides independent inspection, sampling and testing services 24 hours a day, 365 days of the
year. </p>
                        <h4> Public asset auditing</h4>
                    </div>
                    <div class="col">
                        <span>03.</span>
                        <p>All precious metals are 100% insured for replacement value by Lloyd's of London.
Precious metals are stored in protected and insured vaults in New York, London, Zurich, Singapore and
Australia. All precious metal transportation and storage is fully insured by GBI’s vaulting partners through
Lloyd’s of London. </p>
                        <h4>100% insured for full value</h4>
                    </div>
                    <div class="col">
                        <span>04.</span>
                        <p>Ixinium uses Stellar blockchain. Stellar is a platform that connects banks, payments systems, and people.
Integrate to move money quickly, reliably, and at almost no cost. Transactions on the decentralized Stellar
network resolve in 2-5 seconds. Ixinium works in ISO 4217 code.
 </p>
                        <h4>Transactions in seconds</h4>
                    </div>
                </div>
            </div>
            <!-- Our Mission End -->
            <!-- Token Sale start -->
            <div class="token-sale p-tb" id="token">
                <div class="container">
                    <div class="sec-title text-center"><h3>Token Sale</h3></div>
                    <div class="sub-txt text-center">
                        <p>Ixinium ICO sale, 100% of the funds is used for precious metals to back up the Ixinium XXA price</p>
                    </div>
                    <div class="row sale-boxes">
                        <div class="col-md-4 sale-box wow fadeInUp" data-wow-iteration="1">
                            <div class="sale-box-inner">
                                <div class="sale-box-head">
                                    <h4>Public Sale</h4>
                                    <span>1-October-2019
</span>
                                </div>
                                <ul class="sale-box-desc">
                                    <li>
                                        <strong>1 XXA = $6.6525</strong>
                                        <span><35% -25% bonus</span>
                                    </li>
                                    <li>
                                        <strong>up to 189,000,000 XXA</strong>
                                        <span>(up to $0.75 million)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 sale-box wow fadeInUp" data-wow-delay="0.1s">
                            <div class="sale-box-inner">
                                <div class="sale-box-head">
                                    <h4>Public Sale</h4>
                                    <span>1-November-2019</span>
                                </div>
                                <ul class="sale-box-desc">
                                    <li>
                                        <strong>1 XXA = $7.5395</strong>
                                        <span><60% -15% bonus</span>
                                    </li>
                                    <li>
                                        <strong> up to 324,000,000 XXA</strong>
                                        <span>(up to $0.75 million)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 sale-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="sale-box-inner">
                                <div class="sale-box-head">
                                    <h4>Public Sale</h4>
                                    <span>1-December-2019</span>
                                </div>
                                <ul class="sale-box-desc">
                                    <li>
                                        <strong>1 XXA = $8.4265</strong>
                                        <span><85% - 5% bonus</span>
                                    </li>
                                    <li>
                                        <strong>up to 459,000,000 XXA</strong>
                                        <span>(up to $0.75 million)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Token Sale end -->
            <!-- Token Structure start -->
            <div class="token-structure">
                <div class="container">
                    <div class="sec-title text-center"><h3>Token Structure</h3></div>
                    <div class="sub-txt text-center">
                        <p>XXA base value is 100% based on physical precious metals: Gold, Silver, Platinum and Palladium
 are stored in protected and insured vaults in New York, London, Zurich, Singapore and Australia.
All precious metal transportation and storage is fully insured by GBI’s vaulting partners through
Lloyd’s of London. Precious metals vaulting run by Brinks, Loomis and Malca-Amit.
Ixinium uses only LBMA membership vaulting partners.
XXA uses super fast Stellar blockchain network.
</p>
                    </div>
                </div>
                <div class="token-struc-bottom p-tb">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 token-struc-left">
                                <ul>
                                    <li>
                                        <span>Cost of 1 XXA:</span>
                                        <p>$8.87</p>
                                    </li>
                                    <li>
                                        <span>Max Supply:</span>
                                        <p>540,000,000</p>
                                    </li>
                                    <li>
                                        <span>Company (locked 5 years):</span>
                                        <p>26,460,000</p>
                                    </li>
                                    <li>
                                        <span>Founders, team and advisors:</span>
                                        <p>10,000,000 </p>
                                    </li>
                                    <li>
                                        <span>Bounty campaign reserve:</span>
                                        <p>800,000</p>
                                    </li>
                                    <li>
                                        <span>Distributed to Community:</span>
                                        <p>500,000,000</p>
                                    </li><li>
                                        <span>Start funding round :</span>
                                        <p>2,740,000 (Sold out)</p>
                                    </li><li>
                                        <span>Duration of Pre-ICO:</span>
                                        <p>01.06.2019 – 31.09.2019</p>
                                    </li><li>
                                        <span>Pre-ICO limitation of XXA:</span>
                                        <p> 54,000,000</p>
                                    </li><li>
                                        <span>Adjustable emission:</span>
                                        <p> All unsold and unallocated XXA's will be available at ICO with lower percentage discount pricing.</p>
                                    </li><li>
                                        <span>Purchase of XXA is possible several payment methods:</span>
                                        <p> BTC (Bitcoin),
ETH (Ethereum),
LTC (Litecoin),
XRP (Ripple),
XLM(Lumen)
</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 token-struc-right">
                                <div class="sec-title text-center"><h3>Distribution of Tokens</h3></div>
                                <div class="doughnut wow zoomIn">
                                  <div class="doughnutChartContainer">
                                    <canvas id="doughnutChart" height="270"></canvas>
                                  </div>
                                  <div id="legend" class="chart-legend"></div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Token Structure end -->
            <!-- The Roadmap  start-->
            <div class="roadmap-sec p-tb white-sec" id="roadmap">
                <div class="container">
                    <div class="sec-title text-center"><h3>The Roadmap</h3></div>
                    <div class="sub-txt text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.</p>
                    </div>
                    <div class="roadmap-slider owl-carousel">
                        <div class="item">
                            <span>2014</span>
                            <p> Financial structure plan for financial 100% insured product</p>
                        </div>
                        <div class="item">
                            <span>2015</span>
                            <p> Structural studies for bank instruments, banks and fiat currency backing</p>
                        </div>
                        <div class="item">
                            <span>2016</span>
                            <p> Bitcoin and Ethereum blockchain environment and connectivity</p>
                        </div>
                        <div class="item">
                            <span>2017</span>
                            <p> First Ixinium technical layout with physical assets at Ethereum network</p>
                        </div>
                        <div class="item">
                            <span>2018</span>
                            <p> Finalization of Ixinium technical layout and start funding round in Ethereum network</p>
                        </div>
                        <div class="item">
                            <span>2019</span>
                            <p> Asset token and final product in Stellar network. Official web site. Pre-ICO and ICO phases</p>
                        </div><div class="item">
                            <span>2020-2021</span>
                            <p> LBMA membership application</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Roadmap end-->
            <!-- Team sec start-->
            <div class="team-section p-tb" id="team">
                <div class="container">
                    <div class="team-member text-center">
                        <div class="sec-title text-center"><h3>Core Team</h3></div>
                        <div class="sub-txt text-center">
                            <p>Meet Our Experienced Team Behind Ixinium</p>
                        </div>
                        <div class="row">
                            <div class="col wow fadeInUp">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Marko Pakarinen</h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Kimmo Saari</h4>
                                    <span>Co-founder & CEO</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Arne</h4>
                                    <span>Financial Advisor</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Dawid</h4>
                                    <span>Precious metals professional</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-member text-center">
                        <div class="sec-title text-center"><h3>Advisory Team</h3></div>
                        <div class="row">
                            <div class="col wow fadeInUp">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Hamza Khan</h4>
                                    <span>Advisor & Developer</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Danny  Lynde</h4>
                                    <span>Нead of Investor</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Avery  Neal</h4>
                                    <span>ICO Specialist</span>
                                </div>
                            </div>
                            <div class="col wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team">
                                    <img src="<?php echo base_url();?>public/landing/images/team-thumb.jpg" alt="team">
                                    <h4>Mina Franco</h4>
                                    <span>Cryptocurrency Specialist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team sec end-->
            <!-- blog section -->
      <!--       <div class="blog-section p-tb" id="press">
                <div class="container">
                     <div class="sec-title text-center"><h3>We are in the Media</h3></div>
                     <div class="row blogmain">
                         <div class="col-md-7 col-sm-6">
                             <div class="blog-single">
                                <div class="blog-single-img"><a href="cp-aluminium-single-post-with-right-sidebar.html"><img src="images/blog-large.jpg" alt=""></a></div>
                                <div class="blog-single-cont">
                                    <span class="blog-date">January 20, 2018</span>
                                    <h4><a href="cp-aluminium-single-post-with-right-sidebar.html">First Long-Term Bitcoin Option Price of $10,000 Launched by STMX</a></h4>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-5 col-sm-6">
                             <div class="blog-list">
                                 <div class="blog-list-img"><a href="cp-aluminium-single-post-with-no-sidebar.html"><img src="images/blog-small.jpg" alt=""></a></div>
                                 <div class="blog-list-desc">
                                     <span class="blog-date">January 20, 2018</span>
                                     <h4><a href="cp-aluminium-single-post-with-no-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                 </div>
                             </div>
                             <div class="blog-list">
                                 <div class="blog-list-img"><a href="cp-aluminium-single-post-with-left-sidebar.html"><img src="images/blog-small.jpg" alt=""></a></div>
                                 <div class="blog-list-desc">
                                     <span class="blog-date">January 20, 2018</span>
                                     <h4><a href="cp-aluminium-single-post-with-left-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                 </div>
                             </div>
                             <div class="blog-list">
                                 <div class="blog-list-img"><a href="cp-aluminium-single-post-with-left-sidebar.html"><img src="images/blog-small.jpg" alt=""></a></div>
                                 <div class="blog-list-desc">
                                     <span class="blog-date">January 20, 2018</span>
                                     <h4><a href="cp-aluminium-single-post-with-left-sidebar.html">Pay for Purchases Directly with Your Cryptocurrency</a></h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div> -->
        <!-- Content Section End -->   
        <div class="clear"></div>
        <footer class="footer-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="footer-block">
                        <div class="sec-title text-center">
                            <h4 class="widget-title">Get specials offers - Subscribe for more informations!</h4>
                        </div>
                        <p>Leave Your Email Here To Keep In Touch.</p>
                        <div class="newsletter">
                            <form>
                                <div class="input"><input type="email" name="Email" placeholder="Your email address"></div>
                                <div class="submit"><input type="submit" name="subscribe" value="subscribe"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="socials">
                            <ul>
                                <li><a class="facebook" href="https://www.facebook.com/ixinium"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/IxiniumI"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="github" href="#"><i class="fab fa-github-alt"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="bitcoin" href="#"><i class="fab fa-btc"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a class="medium" href="#"><i class="fab fa-medium-m"></i></a></li>
								<li><a class="telegram" href="https://t.me/ixinium"><i class="fab fa-telegram"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyrights">
                            © 2019, IXINUM <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->   
    </div>
    <!--Main Wrapper End-->
 
    <script src="<?php echo base_url();?>public/landing/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/onpagescroll.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/jquery.countdown.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/Chart.js"></script>
    <script src="<?php echo base_url();?>public/landing/js/script.js"></script>
</body>
</html>