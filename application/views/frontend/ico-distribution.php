    
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">ICO Distribution, Rate &amp; Sales Info</h4>
                            </div>
                            <div class="card-text">
                                <p>To become a part of Ixinium project, you can found all details of ICO. <br class="d-none d-sm-block"> You can contribute and <a href="#">buy XXA tokens</a>.</p>
                                <p>You can get a quick response and chat with our team in Telegram: <a href="#">htts://t.me/ixinium</a></p>
                            </div>
                            <div class="gaps-3x"></div>
                            <div class="card-head">
                                <h5 class="card-title card-title-md">ICO Schedule</h5>
                            </div>
                            

                            <?php if(is_array($schedule_events)) : ?>
                            <?php foreach($schedule_events as $event) : ?>
                            <div class="schedule-item">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-6">
                                        <div class="pdb-1x">
                                            <h5 class="schedule-title">
                                                <span><?php echo $event['schedule_name'];?></span>
                                               

                                          <?php 
                                          $currenttime = strtotime(date('m/d/Y h:i'));
                                          $startdate   = strtotime($event['start_date']);
                                          $enddate     = strtotime($event['end_date']);

                                          if(($currenttime > $startdate) && ($currenttime < $enddate))
                                          { 
                                              echo '<span class="badge badge-success ucap badge-xs">Running</span>'; 
                                          };
                                          ?>
                                          <?php 
                                          if($currenttime < $startdate){ 
                                              echo '<span class="badge badge-default ucap badge-xs">Upcomming</span>'; 
                                            };
                                          ?>
                                            
                                                
                                            </h5>
                                            
                                            <span>Start at <?php echo $event['start_date'];?></span>
                                            <span>End at <?php echo $event['end_date'];?></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md col-lg-6">
                                        <div class="pdb-1x">
                                            <h5 class="schedule-title"><span>0.00080 ETH</span></h5>
                                            <span>Min purchase - <?php echo $event['min_purchase'];?> ETH</span>
                                            <span>Token Distribute -<?php echo $event['asset_distribute'];?></span>
                                        </div>
                                    </div>
                                    <?php if($event['bonus_percentage']){ ?>
                                    <div class="col-xl-3 col-md-3 align-self-center text-xl-right">
                                        <div class="pdb-1x">
                                            <span class="schedule-bonus"><?php echo $event['bonus_percentage'];?>% Bonus</span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <?php endif ?>


                           <!--  <div class="schedule-item">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-6">
                                        <div class="pdb-1x">
                                            <h5 class="schedule-title"><span>Main ICO Sale</span><span class="badge badge-disabled ucap badge-xs">Upcomming</span></h5>
                                            <span>Start at Dec 02, 2018 - 11:00 AM</span>
                                            <span>End at Jan 15, 2019 - 11:00 AM</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md col-lg-6">
                                        <div class="pdb-1x">
                                            <h5 class="schedule-title"><span>0.00080 ETH</span></h5>
                                            <span>Min purchase - 0.35 ETH</span>
                                            <span>Token Distribute - 250,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <h6 class="text-light mb-0">* Time zone set in (GMT +6) Dhaka, Bangladesh</h6>                            
                        </div>
                    </div>
					<div class="content-area card">
                        <div class="card-innr">
							<div class="card-head">
                                <h5 class="card-title card-title-md">Invite your friends and family and receive free tokens</h5>
                            </div>
                            <div class="card-text">
                                <p>Each member have a unique XXA referral link to share with friends and family and receive a <strong>bonus - 10% of the value of their contribution</strong>. 
                                If any one sign-up with this link, will be added to your referral program. 
                                The referral link may be used during a token sales running.</p>
                            </div>
                            <div class="referral-form">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 font-bold">Referral URL</h5>
                                    <a href="#" class="link link-primary link-ucap">See Your referral</a>
                                </div>
                                <div class="copy-wrap mgb-1-5x mgt-1-5x">
                                    <span class="copy-feedback"></span>
                                    <em class="fas fa-link"></em>
                                    <input type="text" class="copy-address" value="<?php echo base_url();?>referral/<?php echo cUserDetail()['exId'];?>" disabled>
                                    <button class="copy-trigger copy-clipboard" data-clipboard-text="<?php echo base_url();?>referral/<?php echo cUserDetail()['exId'];?>"><em class="ti ti-files"></em></button>
                                </div><!-- .copy-wrap -->
                            </div>
                            <ul class="share-links">
                                <li>Share with : </li>
                                <li><a href="#"><em class="fab fa-google-plus-g"></em></a></li>
                                <li><a href="https://twitter.com/OIxinium"><em class="fab fa-twitter"></em></a></li>
                                <li><a href="https://web.facebook.com/ixinium"><em class="fab fa-facebook-f"></em></a></li>
                                <li><a href="https://www.linkedin.com/company/ixinium"><em class="fab fa-linkedin-in"></em></a></li> 
                            </ul>
						</div>
					</div>
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                    <img src="<?php echo $baseurl;?>/public/images/logo-light-sm.png" alt="logo">
                                </div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title"><?php lang('common_tokensBalance');?></h6>
                                    <span class="lead"><?php echo cUserDetail()['wallet'] ? cUserDetail()['wallet'] : 0;?> <span><?php lang('common_twz');?></span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title"><?php lang('common_yourContribution');?></h6>

                                
                                <ul class="token-balance-list">
                                      <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['eth'] ? @$contributions['eth'] : 0;?></span>
                                        <span class="sub">ETH</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['btc'] ? @$contributions['btc'] : 0;?></span>
                                        <span class="sub">BTC</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['ltc'] ? @$contributions['ltc'] : 0;?></span>
                                        <span class="sub">LTC</span>
                                    </li>
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="token-sales card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-sm">Pre-Sale Token Sales</h5>
                            </div>
                            <div class="token-rate-wrap row">
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">XXA Token Price</span>
                                    <h4 class="font-mid text-dark">1 ETH = <span><?php echo round(currencyPrice('ETH')/currencyPrice('XXA'),2);?> XXA</span></h4>
                                </div>
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">Exchange Rate</span>
                                    <span>1 ETH = <?php echo currencyPrice('ETH');?> USD = <?php echo round(currencyPrice('ETH')/currencyPrice('BTC'),5);?> BTC</span>
                                </div>
                            </div>
                            <div class="token-bonus-current">
                                <div class="fake-class">
                                    <span class="card-sub-title">Current Bonus</span>
                                    <div class="h3 mb-0">20 %</div>
                                </div>
                                <div class="token-bonus-date">End at <br> 10 Jan, 2019</div>
                            </div>
                        </div>
                        <div class="sap"></div>
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-sm">Token Sales Progress</h5>
                            </div>
                            <ul class="progress-info">
                                <li><span>Raised</span> <?php echo token_info()['volume_token'];?> XXA</li>
                                <li class="text-right"><span>TOTAL</span> <?php echo token_info()['total_circulating_supply'];?> XXA</li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" data-percent="83">
                                    <div>Hard cap <span>1,400,000</span></div>
                                </div>
                                <div class="progress-scap" data-percent="24">
                                    <div>Soft cap <span>40,000</span></div>
                                </div>
                                <div class="progress-percent" data-percent="28"></div>
                            </div>
                            
                            <span class="card-sub-title mgb-0-5x">Sales END IN</span>
                            <div class="countdown-clock" data-date="2019/02/05"></div>
                        </div>
                        
                    </div>
                </div><!-- .col -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
   
