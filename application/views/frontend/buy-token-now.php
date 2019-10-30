<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    
                    <div class="d-lg-none">
                        <a href="#" data-toggle="modal" data-target="#add-wallet" class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x">Add your wallet address before buy <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 1</span>
                                <h4 class="card-title">Choose currency and calculate XXA tokens price</h4>
                            </div>
                            <div class="card-text">
                                <p>You can buy our XXA tokens using ETH, BTC, LTC or USD to become part of Our project.</p>
                            </div>
                            
                            <div class="token-currency-choose"> 
                                <div class="row guttar-15px">   
                           
                            <?php if(is_array(currencies())) : ?>
                            <?php foreach(currencies() as $r) : ?>
                                <?php if($r['currency_symbol'] != 'XXA') : ?>
                                  <?php $link = http_build_query(array(
                                     'cs' => $r['currency_symbol'],
                                     'amtToken' => $this->input->get('amtToken'),
                                     'xxaToken' => $this->input->get('xxaToken'),
                                    ));?>
                                  <a class="col-6" href="javascript:void(0)" onclick="window.location.href='<?php echo base_url();?>buy-token/?<?php echo $link;?>'">
                                        <div class="pay-option">
                                            <input class="pay-option-check" type="radio" id="pay<?php echo strtolower($r['currency_symbol']);?>" name="payOption" checked>
                                            <label class="pay-option-label" for="pay<?php echo strtolower($r['currency_symbol']);?>">
                                                <span class="pay-title"><em class="pay-icon cf cf-<?php echo strtolower($r['currency_symbol']);?>"></em><span class="pay-cur"><?php echo $r['currency_symbol'];?></span></span>
                                                <span class="pay-amount"><?php echo $r['exchange_fees'];?></span>
                                            </label>
                                        </div>       
                                    </a>   
                                
                                <?php endif ?> 
                            <?php endforeach ?>
                            <?php endif ?>

                                 


                                </div><!-- .row -->
                            </div>
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 2</span>
                                <h4 class="card-title">Amount of contribute</h4>
                            </div>
                            <div class="card-text">
                                <p>Enter your amount, you would like to contribute and calculate the amount of token you will received. The calculator helps to convert required currency to tokens.</p>
                            </div>
                            <div class="token-contribute">
                                <div class="token-calc">
                                    <div class="token-pay-amount">
                                        <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">

                                        <div class="token-pay-currency">
                                           <span class="input-hint input-hint-sap"><?php echo $this->input->get('cs');?></span>
                                        </div>
                                    </div>
                                    <div class="token-received">
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-received-amount">
                                            <h5 class="token-amount">123,500.84</h5>
                                            <div class="token-symbol">XXA</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-calc-note note note-plane">
                                    <em class="fas fa-times-circle text-danger"></em>
                                    <span class="note-text text-light">0.35 ETH minimum contribution require.</span>
                                </div>
                            </div>
                            
                            <div class="token-bonus-ui">
                                <div class="bonus-bar">
                                    <div class="bonus-base">
                                    <span class="bonus-base-title">Bonus</span>
                                    <span class="bonus-base-amount">On Sale</span>
                                    <span class="bonus-base-percent">20%</span>
                                </div>
                                    <div class="bonus-extra">
                                    <div class="bonus-extra-item active" data-percent="10">
                                        <span class="bonus-extra-amount">0.5 ETH</span>
                                        <span class="bonus-extra-percent">10%</span>
                                    </div>
                                    <div class="bonus-extra-item active" data-percent="20">
                                        <span class="bonus-extra-amount">1 ETH</span>
                                        <span class="bonus-extra-percent">30%</span>
                                    </div>
                                    <div class="bonus-extra-item active" data-percent="20">
                                        <span class="bonus-extra-amount">5 ETH</span>
                                        <span class="bonus-extra-percent">50%</span>
                                    </div>
                                    <div class="bonus-extra-item" data-percent="20">
                                        <span class="bonus-extra-amount">10 ETH</span>
                                        <span class="bonus-extra-percent">70%</span>
                                    </div>
                                    <div class="bonus-extra-item" data-percent="30">
                                        <span class="bonus-extra-amount">20 ETH</span>
                                        <span class="bonus-extra-percent">100%</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="token-overview-wrap">
                                <div class="token-overview">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-sale">
                                                <span class="token-overview-title">+ 20% Sale Bonus</span>
                                                <span class="token-overview-value bonus-on-sale">15,000.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-amount">
                                                <span class="token-overview-title">+ 30% Amount Bonus</span>
                                                <span class="token-overview-value bonus-on-amount">5,000.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="token-total">
                                                <span class="token-overview-title font-bold">Total XXA</span>
                                                <span class="token-overview-value token-total-amount text-primary">1,823,500.84</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                    <p>Your Contribution will be calculated based on exchange rate at the moment your transaction is confirm.</p>
                                </div>
                            </div>
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 3</span>
                                <h4 class="card-title">Make a payment</h4>
                            </div>
                            <div class="card-text">
                                <p>To get tokens please make a payment. You can send payment directly to our address or you may pay online. Once you paid, you will receive an email about the successfull deposit. </p>
                            </div>
                            <div class="pay-buttons">
                                <div class="pay-button"><a href="#" data-toggle="modal" data-target="#get-pay-address" class="btn btn-light-alt btn-between w-100">Get Address for Payment <em class="ti ti-wallet"></em></a></div>
                                <div class="pay-button-sap">or</div>
                                <div class="pay-button"><a href="#" data-toggle="modal" data-target="#pay-online" class="btn btn-primary btn-between w-100">Make Online Payment <em class="ti ti-arrow-right"></em></a></div>
                            </div>
                            <div class="pay-notes">
                                <div class="note note-plane note-light note-md font-italic">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Tokens will appear in your account after payment successfully made and approved by our team. <br class="d-none d-lg-block"> Please note that, XXA tokens will distributed end of ICO Token Sales. </p>
                                </div>
                            </div>
                        </div> <!-- .card-innr -->
                    </div> <!-- .content-area -->
                    
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="d-none d-lg-block">
                        <a href="#" data-toggle="modal" data-target="#add-wallet" class="btn btn-danger btn-xl btn-between w-100">Add your wallet address before buy <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-3x"></div>
                    </div>
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance">
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Tokens Balance</h6>
                                    <span class="lead">120,000,000 <span>XXA</span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Your Contribution</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead">2.646</span>
                                        <span class="sub">ETH</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">1.265</span>
                                        <span class="sub">BTC</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">6.506</span>
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
                                    <h4 class="font-mid text-dark">1 ETH = <span>12500 XXA</span></h4>
                                </div>
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">Exchange Rate</span>
                                    <span>1 ETH = 196.98 USD = 0.032 BTC</span>
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
                                <li><span>Raised</span> 2,758 XXA</li>
                                <li class="text-right"><span>TOTAL</span> 1,500,000 XXA76543
                                </li>
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
    
   
    
    
    <div class="modal fade" id="add-wallet" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Wallet Address</h4>
                    <p>In order to receive your <a href="#"><strong>TWZ Tokens</strong></a>, please select your wallet address and you have to put the address below input box. <strong>You will receive XXA tokens to this address after the Token Sale end.</strong></p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-with-label">
                                    <label for="swalllet" class="input-item-label">Select Wallet </label>
                                    <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                        <option value="eth">Ethereum</option>
                                        <option value="dac">DashCoin</option>
                                        <option value="bic">BitCoin</option>
                                    </select>
                                </div><!-- .input-item -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <div class="input-item input-with-label">
                            <label for="token-address" class="input-item-label">Your Address for tokens:</label>
                            <input class="input-bordered" type="text" id="token-address" name="token-address" value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae">
                            <span class="input-note">Note: Address should be ERC20-compliant.</span>
                        </div><!-- .input-item -->
                        <div class="note note-plane note-danger">
                            <em class="fas fa-info-circle"></em>
                            <p>DO NOT USE your exchange wallet address such as Kraken, Bitfinex, Bithumb, Binance etc. You can use MetaMask, MayEtherWallet, Mist wallets etc. Do not use the address if you don’t have a private key of the your address. You WILL NOT receive TWZ Tokens and WILL LOSE YOUR FUNDS if you do.</p>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <button class="btn btn-primary">Add Wallet</button>
                            <div class="gaps-2x d-sm-none"></div>
                            <span class="text-success"><em class="ti ti-check-box"></em> Added wallet address</span>
                        </div>
                    </form><!-- form -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

    
    <div class="modal fade" id="get-pay-address" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Payment Address for Deposit</h4>
                    <p>Please make deposit amount of <strong>1.0 ETH</strong> to our address and receive <strong>18,750 TWZ</strong> tokens including <strong>bonus 1,540 XXA</strong> once we recevied payment.</p>
                    <div class="gaps-1x"></div>
                    <h6 class="font-bold">Payment to the following Address</h6>
                    <div class="copy-wrap mgb-0-5x">
                        <span class="copy-feedback"></span>
                        <em class="fab fa-ethereum"></em>
                        <input type="text" class="copy-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled="">
                        <button class="copy-trigger copy-clipboard" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581"><em class="ti ti-files"></em></button>
                    </div><!-- .copy-wrap -->
                    <ul class="pay-info-list row">
                        <li class="col-sm-6"><span>SET GAS LIMIT:</span> 120 000</li>
                        <li class="col-sm-6"><span>SET GAS PRICE:</span> 95 Gwei</li>
                    </ul><!-- .pay-info-list -->
                    <div class="pdb-2-5x pdt-1-5x">
                        <input type="checkbox" class="input-checkbox input-checkbox-md" id="agree-term">
                        <label for="agree-term">I hereby agree to the <strong>token purchase aggrement &amp; token sale term</strong>.</label>
                    </div>
                    <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#pay-confirm">Buy Tokens Now  <em class="ti ti-arrow-right mgl-4-5x"></em></button>
                    <div class="gaps-3x"></div>
                    <div class="note note-plane note-light mgb-1x">
                        <em class="fas fa-info-circle"></em>
                        <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MayEtherWallet, MetaMask, Mist wallets etc.</p>
                    </div>
                    <div class="note note-plane note-danger">
                        <em class="fas fa-info-circle"></em>
                        <p>In case you send a different amount, number of XXA tokens will update accordingly.</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-confirm" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Confirmation Your Payment</h4>
                    <p class="lead text-primary">Your Order no. <strong>TNX93KR8N0</strong> has been placed successfully. </p>
                    <p>The tokens balance will appear in your account only after you transaction gets 6 confirmations and approved our team.</p>
                    <p>To <strong>speed up verifcation</strong> proccesing please enter <strong>your wallet address</strong> from where you’ll transferring your ethereum to our address.</p>
                    <div class="input-item input-with-label">
                        <label for="token-address" class="input-item-label">Enter your wallet address</label>
                        <input class="input-bordered" type="text" value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae">
                    </div><!-- .input-item -->
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-review" class="btn btn-primary">Confirm Payment</a></li>
                        <li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-online" class="link link-primary">Make Online Payment</a></li>
                    </ul>
                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
                    <div class="note note-plane note-light mgb-1x">
                        <em class="fas fa-info-circle"></em>
                        <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MayEtherWallet, MetaMask, Mist wallets etc.</p>
                    </div>
                    <div class="note note-plane note-danger">
                        <em class="fas fa-info-circle"></em>
                        <p>In case you send a different amount, number of TWZ tokens will update accordingly.</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-online" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content pb-0">
                <div class="popup-body">
                    <h4 class="popup-title">Buy Tokens and Payment</h4>
                    <p class="lead">To receiving <strong>18,750 TWZ</strong> tokens including <strong>bonus 1,540 XXA</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can choose any of following payment method to make your payment. The tokens balance will appear in your account after successfull payment.</p>
                    <h5 class="mgt-1-5x font-mid">Select payment method:</h5>
                    <ul class="pay-list guttar-20px">
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-coin">
                            <label class="pay-check-label" for="pay-coin"><img src="images/pay-a.png" alt="pay-logo"></label>
                        </li>
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-coinpay">
                            <label class="pay-check-label" for="pay-coinpay"><img src="images/pay-b.png" alt="pay-logo"></label>
                        </li>
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-paypal">
                            <label class="pay-check-label" for="pay-paypal"><img src="images/pay-c.png" alt="pay-logo"></label>
                        </li>
                    </ul>
                    <span class="text-light font-italic mgb-2x"><small>* Payment gateway company may charge you a processing fees.</small></span>
                    <div class="pdb-2-5x pdt-1-5x">
                        <input type="checkbox" class="input-checkbox input-checkbox-md" id="agree-term-3">
                        <label for="agree-term-3">I hereby agree to the <strong>token purchase aggrement &amp; token sale term</strong>.</label>
                    </div>
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-review" class="btn btn-primary">Buy Tokens &amp; Process to Pay <em class="ti ti-arrow-right mgl-2x"></em></a></li>
                        <li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#get-pay-address" class="link link-primary">Make Manual Payment</a></li>
                    </ul>
                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
                    <div class="note note-plane note-light mgb-1x">
                        <em class="fas fa-info-circle"></em>
                        <p class="text-light">You will automatically redirect for payment after your order placing.</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-coingate" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Buy Tokens and Payment</h4>
                    <p class="lead">To receiving <strong>18,750 TWZ</strong> tokens including <strong>bonus 1,540 TWZ</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can pay via online payment geteway <strong>“Coingate”</strong>. It’s safe and secure.</p>
                    <div class="pdb-2-5x pdt-1-5x">
                        <input type="checkbox" class="input-checkbox input-checkbox-md" id="agree-term-2">
                        <label for="agree-term-2">I hereby agree to the <strong>token purchase aggrement &amp; token sale term</strong>.</label>
                    </div>
                    <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#pay-thanks">Place Order &amp; Process to Pay  <em class="ti ti-arrow-right mgl-4-5x"></em></button>
                    <div class="gaps-3x"></div>
                    <div class="note note-plane note-light mgb-1x">
                        <em class="fas fa-info-circle"></em>
                        <p>You will automatically redirect to Coingate website for payment</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-thanks" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-success">
                        <em class="ti ti-check"></em>
                    </div>
                    <div class="gaps-2x"></div>
                    <h3>Thanks for your contribution!</h3>
                    <p>Your payment amount <strong>1.0 ETH</strong> has been successfully received againest order no. <strong>TNX94KR8N0</strong>. We’ve added <strong>18,750 XXA</strong> tokens in account.</p>
                    <div class="gaps-2x"></div>
                    <a href="ico-distribution.html" class="btn btn-primary">See Token Balance</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-review" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-success">
                        <em class="ti ti-check"></em>
                    </div>
                    <div class="gaps-2x"></div>
                    <h3>We’re reviewing your payment.</h3>
                    <p>We’ll review your transaction and get back to your within 6 hours. You’ll receive an email with the details of your contribution.</p>
                    <div class="gaps-2x"></div>
                    <a href="transactions.html" class="btn btn-primary">View Transaction</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    
    <div class="modal fade" id="pay-failed" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-error">
                        <em class="ti ti-alert"></em>
                    </div>
                    <div class="gaps-2x"></div>
                    <h3>Oops! Payment failed!</h3>
                    <p>Sorry, seems there is an issues occurred and we couldn’t process your payment. If you continue to have issues, please contact us with order no. <strong>TNX94KR8N0</strong>.</p>
                    <div class="gaps-2x"></div>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#get-pay-address" class="btn btn-primary">Try to Pay Again</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    

