    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal-data">Personal Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#password">Password</a>
                                </li>
                            </ul><!-- .nav-tabs-line -->
                            <div class="tab-content" id="profile-details">
                                <div class="tab-pane fade show active" id="personal-data">
                                    
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="full-name" class="input-item-label">Full Name</label>
                                                    <input class="input-bordered" type="text" id="full-name" name="full-name" value="<?php echo $info['fname'];?>">
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Email Address</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="email-address" value="<?php echo $info['email'];?>" disabled>
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="mobile-number" class="input-item-label">Mobile Number</label>
                                                    <input class="input-bordered" type="text" id="mobile-number" name="mobile-number" value="<?php echo $info['mobile_number'];?>">
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="date-of-birth" class="input-item-label">Date of Birth</label>
                                                    <input class="input-bordered date-picker-dob" type="text" id="date-of-birth" name="date-of-birth" value="<?php echo $info['dob'];?>">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="nationality" class="input-item-label">Nationality</label>
                                                    <select class="select-bordered select-block" name="nationality" id="nationality">
                                                       
                                                        <?php foreach(countries() as $country) : ?>
                                                            <option value="<?php echo $country['sortname'];?>" <?php echo (strtoupper($info['nationality']) == $country['sortname']) ? "selected" : "";?>>
                                                                <?php echo $country['name'];?>
                                                            </option>
                                                        <?php endforeach ?>     
                                                        
                                                    </select>
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="gaps-1x"></div><!-- 10px gap -->
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-primary updateProfile">Update Profile</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                            <span class="text-success updatePersonalDataSuccess" style="display: none"><em class="ti ti-check-box"></em> All Changes are saved</span>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .tab-pane -->
                                <?php 
                                $settings = json_decode($info['settings'],true);
                                $save_log = ($settings['save_log'] == 1) ? "checked" : "";
                                $pass_change_confirm = ($settings['pass_change_confirm'] == 1) ? "checked" : "";
                                $latest_news = ($settings['latest_news'] == 1) ? "checked" : "";
                                $activity_alert = ($settings['activity_alert'] == 1) ? "checked" : "";
                                ?>
                                <div class="tab-pane fade" id="settings">
                                    <div class="pdb-1-5x">
                                        <h5 class="card-title card-title-sm text-dark">Security Settings</h5>    
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="save-log" <?php echo $save_log;?>>
                                        <label for="save-log">Save my Activities Log</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="pass-change-confirm" <?php echo $pass_change_confirm;?>>
                                        <label for="pass-change-confirm">Confirm me through email before password change</label>
                                    </div>
                                    <div class="pdb-1-5x">
                                        <h5 class="card-title card-title-sm text-dark">Manage Notification</h5>    
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="latest-news" <?php echo $latest_news;?>>
                                        <label for="latest-news">Notify me by email about sales and latest news</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="activity-alert" <?php echo $activity_alert;?>>
                                        <label for="activity-alert">Alert me by email for unusual activity.</label>
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-primary updateSettings">Update Settings</button>
                                        <span></span>
                                        <span class="text-success updateSettingsSuccess" style="display: none"><em class="ti ti-check-box"></em> Setting has been updated</span>
                                    </div>
                                </div><!-- .tab-pane -->

                                <div class="tab-pane fade" id="password">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label oldPasswordLabel">
                                                <label for="old-pass" class="input-item-label">Old Password</label>
                                                <input class="input-bordered" type="password" id="old-pass" name="old-pass">
                                               
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="new-pass" class="input-item-label">New Password</label>
                                                <input class="input-bordered" type="password" id="new-pass" name="new-pass">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="confirm-pass" class="input-item-label">Confirm New Password</label>
                                                <input class="input-bordered" type="password" id="confirm-pass" name="confirm-pass">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="note note-plane note-info pdb-1x passwordMatchOldNew">
                                        <em class="fas fa-info-circle"></em>
                                        <p>Password should be minmum 8 letter and include lower and uppercase letter.</p>
                                    </div>
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-primary updatePassword">Update</button>
                                        <div class="gaps-2x d-sm-none"></div>
                                        <span id="updatePasswordError"></span>
                                        <span class="text-success updatePasswordSuccess" style="display: none"><em class="ti ti-check-box"></em>  Changed Password</span>
                                    </div>
                                </div><!-- .tab-pane -->
                            </div><!-- .tab-content -->
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Two-Factor Verification</h4>
                            </div>
                            <p>Two-factor authentication is a method for protection your web account. When it is activated you need to enter not only your password, but also a special code. You can receive this code by in mobile app. Even if third person will find your password, then can't access with that code.</p>
                            <div class="d-sm-flex justify-content-between align-items-center pdt-1-5x">
                                <span class="text-light ucap d-inline-flex align-items-center">
                                    <span class="mb-0"><small>Current Status:</small></span> 
                                    <span class="badge badge-disabled ml-2">Disabled</span>
                                </span>
                                <div class="gaps-2x d-sm-none"></div>
                                <button class="order-sm-first btn btn-primary" onclick="$('#2fa-mobile-modal').modal('show')">Enable 2FA</button>
                            </div>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="account-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Your Account Status</h6>
                            <ul class="btn-grp">
                                <li><a href="#" class="btn btn-auto btn-xs btn-success">Email Verified</a></li>
                                <li><a href="#" class="btn btn-auto btn-xs btn-warning">KYC Pending</a></li>
                            </ul>
                            <div class="gaps-2-5x"></div>
                            <h6 class="card-title card-title-sm"><?php echo currentBaseCurrency();?> Receiving Wallet</h6>
                            <div class="d-flex justify-content-between">
                                <span><span>
                            
                            <?php
                              if(@cUserDetail()['currencies'])
                              { 
                                 echo substr(json_decode(@cUserDetail()['currencies'],true)['xxa'],0,20).'....'; 
                              }else{
                                 echo "No XXA Wallet Address Found";
                              }     
                            ?> 
                                </span> <em class="fas fa-info-circle text-exlight" data-toggle="tooltip" data-placement="bottom" title="Share this address to receive <?php echo currentBaseCurrency();?>"></em></span>
                                <a href="#" data-clipboard-text="<?php echo json_decode(@cUserDetail()['currencies'],true)['xxa'];?>" class="link link-ucap copy-clipboard">Copy</a>  

                            </div>
                        </div>
                    </div>
                    <div class="referral-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Earn with Referral</h6>
                            <p class=" pdb-0-5x">Invite your friends &amp; family and receive a <strong><span class="text-primary">bonus - 10%</span> of the value of contribution.</strong></p>
                            <div class="copy-wrap mgb-0-5x">
                                <span class="copy-feedback"></span>
                                <em class="fas fa-link"></em>
                                <input type="text" class="copy-address" value="<?php echo base_url();?>referral/<?php echo cUserDetail()['exId'];?>" disabled>
                                <button class="copy-trigger copy-clipboard" data-clipboard-text="<?php echo base_url();?>referral/<?php echo cUserDetail()['exId'];?>"><em class="ti ti-files"></em></button>
                            </div><!-- .copy-wrap -->
                        </div>
                    </div>
                    <div class="kyc-info card">
                        <div class="card-innr">
                            <h6 class="card-title card-title-sm">Identity Verification - KYC</h6>
                            <p>To comply with regulation, participant will have to go through indentity verification.</p>
                            <p class="lead text-light pdb-0-5x">You have not submitted your KYC application to verify your indentity.</p>
                            
                            <?php if(cUserDetail()['kyc_status'] == 4){ ?>  
                              <a href="<?php echo base_url();?>kyc/thankyou" class="btn btn-primary btn-block">Click to Proceed</a>
                            <?php }else{ ?>
                              <a href="#" class="btn btn-primary btn-block">Click to Proceed</a>
                            <?php } ?>
                            
                            <h6 class="kyc-alert text-danger">* KYC verification required for purchase token</h6>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
   
    
    <div class="modal fade" id="edit-wallet" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Wallet Address</h4>
                    <p>In order to receive your <a href="#"><strong>TWZ Tokens</strong></a>, please select your wallet address and you have to put the address below input box. <strong>You will receive TWZ tokens to this address after the Token Sale end.</strong></p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-item input-with-label">
                                    <label for="swalllet" class="input-item-label">XXA Wallet Addresses</label>
                                   <!--  <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                        <option value="eth">Ethereum</option>
                                        <option value="dac">DashCoin</option>
                                        <option value="bic">BitCoin</option>
                                    </select> -->

                            <?php
                              if(@cUserDetail()['currencies'])
                              { 
                                 echo '<div class="alert alert-success" style="font-size:14px">'.json_decode(@cUserDetail()['currencies'],true)['xxa'].'</div>';
                              }else{
                                 echo "<div class='alert alert-warning alert-block'>No XXA Wallet Address Found !</div>";
                              }     
                            ?>
                                </div><!-- .input-item -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                         <div class="input-item input-with-label">
                            <label for="token-address" class="input-item-label">Enter your XXA Address to receive tokens:</label>

                            <input class="input-bordered" type="text" id="token-address" name="token-address" placeholder="Your XXA token address">

                            <span class="input-note">Note: Check address carefully before adding.</span>

                        </div><!-- .input-item -->
                        <div class="note note-plane note-danger">
                            <em class="fas fa-info-circle"></em>
                            <p>DO NOT USE your exchange wallet address such as Kraken, Bitfinex, Bithumb, Binance etc. You can use MetaMask, MayEtherWallet, Mist wallets etc. Do not use the address if you don’t have a private key of the your address. You WILL NOT receive XXA Tokens and WILL LOSE YOUR FUNDS if you do.</p>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-primary" id="addWallet">Add Wallet</button>
                            <div class="gaps-2x d-sm-none"></div>
                            <span id="#notify"></span>
                        </div>
                    </form><!-- form -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


    <div class="modal fade" id="2fa-mobile-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">2FA Mobile Verification</h4> 
                    <p>In order to make your account more secure<a href="#"><strong></strong></a>, please verify your phone number and you have to put your 10 digit phone number below input box. <strong>You will receive a OTP pin and will expire after 1 day</strong></p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-item input-with-label">
                                    <label for="swalllet" class="input-item-label">Your Phone Number</label>
                                   <!--  <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                        <option value="eth">Ethereum</option>
                                        <option value="dac">DashCoin</option>
                                        <option value="bic">BitCoin</option>
                                    </select> -->

                            <?php
                              if(@cUserDetail()['mobile_number'])
                              { 
                                 echo '<div class="alert alert-success" style="font-size:14px">'.cUserDetail()['mobile_number'].'</div>';
                              }else{
                                 echo "<div class='alert alert-warning alert-block'>Please add your phone number in your profile page then continue!</div>";
                              }     
                            ?>
                                </div><!-- .input-item -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <?php
                         if(cUserDetail()['mobile_number']){ ?> 
                         <div class="input-item input-with-label otp_input" style="display: none">
                            <label for="token-address" class="input-item-label">Enter the OTP pin that your receive:</label>
                            <input class="input-bordered" type="text" id="token-address" name="token-address" placeholder="OTP PIN">
                            <span class="input-note">Note: Check your recent OTP pin.</span>
                        </div><!-- .input-item -->
                        <div class="note note-plane note-danger">
                            <em class="fas fa-info-circle"></em>
                            <p>DO NOT GIVE this OTP pin to someone if ask or your account will get compromise</p>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-primary" id="sendOTP">Send OTP</button>
                            <div class="gaps-2x d-sm-none"></div>
                            <span id="#notify"></span>
                        </div>
                        <?php } ?>
                    </form><!-- form -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
