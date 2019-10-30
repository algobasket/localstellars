
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                     <div class="card content-area">
                <div class="card-innr card-innr-fix">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">User Details</h4>
                        <div class="d-flex align-items-center guttar-20px">
                            <div class="flex-col d-sm-block d-none">
                                <a href="<?php echo base_url();?>backend/users" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Back</a>
                            </div>
                            <div class="flex-col d-sm-none">
                                <a href="user-list.html" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                            </div>
                            <div class="relative d-inline-block">
                                <a href="#" class="btn btn-dark btn-sm btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                <div class="toggle-class dropdown-content dropdown-content-top-left">
                                    <ul class="dropdown-list">
                                        <li><a href="#"><em class="far fa-envelope"></em> Send Mail</a></li>
                                        <li><a href="#"><em class="fas fa-shield-alt"></em> Reset Pass</a></li>
                                        <li><a href="<?php echo base_url();?>backend/users/suspend/<?php echo $getUserData['user_id'];?>"><em class="fas fa-ban"></em> Suspend</a></li>
                                        <li><a href="<?php echo base_url();?>backend/users/activate/<?php echo $getUserData['user_id'];?>"><i class="far fa-check-circle"></i> Activate</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex">
                        <div class="fake-class">
                            <span class="data-details-title">Token Balance</span>
                            <span class="data-details-info large">
                                <?php echo $getUserData['wallet'] ? $getUserData['wallet'] : 0;?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Contributed</span>
                            <span class="data-details-info large">
                                <?php echo @$contributions['eth'] ? @$contributions['eth'] : 0;?> <small>ETH</small>
                                <?php echo @$contributions['btc'] ? @$contributions['btc'] : 0;?> <small>BTC</small>
                                <?php echo @$contributions['ltc'] ? @$contributions['ltc'] : 0;?> <small>LTC</small>

                            </span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Account Status</span>
                            <span class="badge badge-<?php echo $getUserData['statusColor'];?> ucap"><?php echo $getUserData['statusName'];?></span>
                        </div>
                        <ul class="data-vr-list">
                            
                            <?php if($getUserData['email_status']){ ?>
                              <li><div class="data-state data-state-sm data-state-approved"></div> Email</li>
                            <?php }else{ ?>
                              <li><div class="data-state data-state-sm data-state-pending"></div> Email</li>
                            <?php } ?>

                            <?php if($getUserData['kyc_status']){ ?>
                              <li><div class="data-state data-state-sm data-state-approved"></div> KYC</li>
                            <?php }else{ ?>
                              <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                            <?php } ?>
                           
                            <li><div class="data-state data-state-sm data-state-approved"></div> WL</li>
                        </ul>
                    </div>

                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">User Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Full Name</div>
                            <div class="data-details-des"><?php echo $getUserData['fname'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Surname</div>
                            <div class="data-details-des">iO</div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Email Address</div>
                            <div class="data-details-des"><?php echo $getUserData['email'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Mobile Number</div>
                            <div class="data-details-des"><?php echo $getUserData['mobile_number'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Date of Birth</div>
                            <div class="data-details-des"><?php echo $getUserData['dob'];?></div>
                        </li><!-- li -->
                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">More Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Joining Date</div>
                            <div class="data-details-des"><?php echo $getUserData['created'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Reg Method</div>
                            <div class="data-details-des"><label class="badge badge-success">Email</label> <?php echo $getUserData['facebook_oauth'] ? "| <label class='badge badge-primary'>facebook</label>":"";?><?php echo $getUserData['google_oauth'] ? "| <label class='badge badge-warning'>Google</label>":"";?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Last Login</div>
                            <div class="data-details-des"><?php echo $getLastLogin ;?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Newsletter Subscription</div>
                            <div class="data-details-des">
                                <?php echo ($getUserData['has_newsletter_subscription'] == 0) ? "No" : "Yes" ;?>
                            </div>
                        </li><!-- li -->
                    </ul>
                </div><!-- .card-innr -->
            </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->  
    
   