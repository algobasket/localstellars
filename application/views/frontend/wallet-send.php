    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="content-area card"> 
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Send <?php echo currentBaseCurrency();?></h4>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?php echo base_url();?>account/wallet">Send <?php echo currentBaseCurrency();?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url();?>account/wallet_receive">Receive <?php echo currentBaseCurrency();?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url();?>account/wallet_transactions">Transactions</a>
                                </li>
                            </ul><!-- .nav-tabs-line -->
                            <div class="tab-content" id="profile-details">
                                <div class="tab-pane fade show active" id="personal-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                    <img src="<?php echo $baseurl;?>/public/images/stellar_xlm-512.png" alt="logo" style="width: 100%">
                                </div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">
                                        In your wallet:
                                    </h6>
                                    <span class="lead">
                                      <?php echo cUserDetail()['wallet'] ? cUserDetail()['wallet'] : 0;?> <?php echo currentBaseCurrency();?>
                                    <span><?php lang('common_twz');?></span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Transaction fee:</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['eth'] ? @$contributions['eth'] : 0;?></span>
                                        <span class="sub">XLM</span>
                                    </li>
                                   

                                </ul>
                                 <h6 class="card-sub-title">You can send up to:</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['eth'] ? @$contributions['eth'] : 0;?></span>
                                        <span class="sub">XLM</span>
                                    </li>
                                   

                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-item input-with-label">
                                                    <label for="full-name" class="input-item-label">Receiving <?php echo currentBaseCurrency();?> address</label>
                                                    <input class="input-bordered" type="text" id="full-name" name="full-name" placeholder="<?php echo currentBaseCurrency();?> address">
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Amount in <?php echo currentBaseCurrency();?></label>
                                                    <input class="input-bordered" type="text" id="email-address" name="email-address" placeholder="0.0000">
                                                </div><!-- .input-item -->
                                            </div>
                                            &nbsp;&nbsp;&nbsp;<label class="badge badge-primary">More Options</label>
                                            <div class="col-md-12">
                                                <div class="input-item input-with-label">
                                                    <label for="mobile-number" class="input-item-label">Add Memo</label>
                                                    <textarea class="input-bordered" id="mobile-number" name="mobile-number" placeholder="Appears in the transaction list"></textarea>
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-item input-with-label">
                                                    <label for="mobile-number" class="input-item-label">Amount</label>
                                                    <input class="input-bordered" type="text" id="mobile-number" name="mobile-number" placeholder="0.0000">
                                                </div><!-- .input-item -->
                                            </div>
                                           
                                          
                                        </div><!-- .row -->
                                        <div class="gaps-1x"></div><!-- 10px gap -->
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-primary updateProfile">Continue</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                            <span class="text-success updatePersonalDataSuccess" style="display: none"><em class="ti ti-check-box"></em> All Changes are saved</span>
                                        </div>
                                    </form><!-- form -->
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
                                <button class="order-sm-first btn btn-primary">Enable 2FA</button>
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
                            <h6 class="card-title card-title-sm">Receiving <?php echo currentBaseCurrency();?> Wallet</h6>
                            <div class="d-flex justify-content-between">
                                <span><span>
                            
                            <?php
                              if(@cUserDetail()['currencies'])
                              { 
                                 echo substr(json_decode(@cUserDetail()['currencies'],true)['xxa'],0,20) . '.....'; 
                              }else{
                                 echo "No XXA Wallet Address Found";
                              }     
                            ?> 
                                </span> <em class="fas fa-info-circle text-exlight" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 TWZ"></em></span>
                                <a href="#" data-toggle="modal" data-target="#edit-wallet" class="link link-ucap">Edit</a>
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
    
