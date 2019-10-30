<?php
    $amount   = $this->input->get('xxaToken');
    $amtToken = $this->input->get('amtToken'); 
    $sales = $amtToken * 20/100;
    $bonus = $amount * 30/100;
    $total = $amount + $bonus - $sales;
    $makeOrderNumber = str_shuffle(strtoupper(time().rand(1,99999).uniqid()));
?>
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
                                            <input class="pay-option-check" type="radio" id="pay<?php echo strtolower($r['currency_symbol']);?>" name="payOption" <?php echo ($r['currency_symbol'] == $this->input->get('cs')) ? "checked" : "" ;?>>
                                            <label class="pay-option-label" for="pay<?php echo strtolower($r['currency_symbol']);?>">
                                                <span class="pay-title"><em class="pay-icon cf cf-<?php echo strtolower($r['currency_symbol']);?>"></em><span class="pay-cur"><?php echo $r['currency_symbol'];?></span></span>
                                                <span class="pay-amount"><?php echo $r['price'];?>$</span>
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
                                        <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="<?php echo $this->input->get('amtToken');?>" onkeyup="$('.clickToCalculate').click();">

                                        <div class="token-pay-currency">
                                           <span class="input-hint input-hint-sap">
                                            <?php echo $this->input->get('cs');?></span>
                                        </div>
                                    </div>
                                    <div class="token-received">
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-eq-sign">
                                            <a href="javascript:void(0)" class="btn btn-primary clickToCalculate"  data-asset="<?php echo $this->input->get('cs');?>" data-currencysymbol="<?php echo $this->input->get('cs');?>" data-amttoken="<?php echo $this->input->get('amttoken');?>" data-xxatoken="<?php echo $this->input->get('xxatoken');?>" data-ordernumber="<?php echo $makeOrderNumber;?>">Click To Calculate</a>
                                        </div>
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-received-amount">
                                            <h5 class="token-amount">
                                               <?php echo $this->input->get('xxaToken');?>
                                            </h5>
                                            <div class="token-symbol">XXA</div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="token-calc-note note note-plane">
                                    <em class="fas fa-times-circle text-danger"></em>
                                    <span class="note-text text-light">1 LTC or <?php echo round(currencyPrice('LTC')/currencyPrice('ETH'),2);?> ETH or <?php echo round(currencyPrice('LTC')/currencyPrice('BTC'),2);?> BTC minimum contribution require.</span>
                                </div>
                            </div>
                            
                            <!-- <div class="token-bonus-ui">
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
                                                <span class="token-overview-value bonus-on-sale">
                                                <?php echo $amtToken;?>
                                                <?php echo $this->input->get('cs');?>
                                                -
                                                <?php echo $sales;?>
                                                <?php echo $this->input->get('cs');?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-amount">
                                                <span class="token-overview-title">+ 30% Amount Bonus</span>
                                                <span class="token-overview-value bonus-on-amount">
                                                     <?php echo $this->input->get('xxaToken') * 30/100;?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="token-total">
                                                <span class="token-overview-title font-bold">Total XXA</span>
                                                <span class="token-overview-value token-total-amount text-primary">

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                    <p>Your Contribution will be calculated based on exchange rate at the moment your transaction is confirm.</p>
                                </div>
                            </div> -->
                            
                            <span id="paymentblock" style="display: none">
                                
                            <div class="card-head">
                                <span class="card-sub-title text-primary font-mid">Step 3</span>
                                <h4 class="card-title">Make a payment</h4>
                            </div>
                            
                            <div class="card-text">
                                <p>To get tokens please make a payment. You can send payment directly to our address or you may pay online. Once you paid, you will receive an email about the successfull deposit. </p>
                            </div>
                             <?php if($isKycVerified == true){ ?>
                            <div class="btn-group">
                            
                                <br>
                                <table cellpadding="5"> 
                                    <tr>
                                      <td>
                                          <?php if($this->input->get('cs') != 'USD') : ?>
                                          <a href="#" data-toggle="modal" data-target="#get-pay-address" class="btn btn-success btn-between w-100">Get Deposit Address for Payment <em class="ti ti-wallet"></em></a>
                                          <?php endif ?>
                                       </td>
                                       <td>
                                           <a href="#" data-toggle="modal" data-target="#pay-online" class="btn btn-success btn-between w-100">Make Instant Online Payment <em class="ti ti-arrow-right"></em></a> 
                                       </td>
                                     </tr>
                                     
                                    <tr>
                                      <td>
                                         <a href="https://stellarport.io/exchange/alphanum4/XXA/GC4HS4CQCZULIOTGLLPGRAAMSBDLFRR6Y7HCUQG66LNQDISXKIXXADIM/native/XLM/Stellar?tab=Markets" class="btn btn-dark btn-between btn-block w-100" target="__self">Buy Directly From StellarPort.io<em class="ti ti-arrow-right mgl-4-5x"></em>
                                          </a>
                                     </td>
                                    </tr>
                                </table>


                            </div>
                            <?php }else{ ?>
                              
                              <div class="alert alert-warning">
                                 <strong>We are still waiting for your identity verification. Once our team verified your indentity, you will be notified by email. You can also check your KYC compliance status from your profile page.</strong>
                              </div>
            

                            <?php } ?>
                            <div class="pay-notes">
                                <div class="note note-plane note-light note-md font-italic">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Tokens will appear in your account after payment successfully made and approved by our team. <br class="d-none d-lg-block"> Please note that, XXA tokens will distributed end of ICO Token Sales. </p>
                                </div>
                            </div>
                            </span>

                        </div> <!-- .card-innr -->
                    </div> <!-- .content-area -->
                    
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="d-none d-lg-block">
                        <a href="#" data-toggle="modal" data-target="#add-wallet" class="btn btn-danger btn-xl btn-between w-100">Add your XXA wallet address before buy <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-3x"></div>
                    </div>
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
                                    <h4 class="font-mid text-dark">1 <?php echo $this->input->get('cs');?> = <span><?php echo round(currencyPrice($this->input->get('cs'))/currencyPrice('XXA'),2);?> XXA</span></h4>
                                </div>
                                <div class="token-rate col-md-6 col-lg-12">
                                    <span class="card-sub-title">Exchange Rate</span>
                                    <span>1 <?php echo $this->input->get('cs');?> = <?php echo currencyPrice($this->input->get('cs'));?> USD = <?php echo round(currencyPrice($this->input->get('cs'))/currencyPrice('BTC'),5);?> BTC</span>
                                </div>
                            </div>
                            

                            <div class="token-bonus-current">
                                <div class="fake-class">
                                    <span class="card-sub-title">Current Bonus</span>
                                    <div class="h3 mb-0">10 %</div>
                                </div>
                                <!-- <div class="token-bonus-date">End at <br> 10 Jan, 2019</div> -->
                            </div>

                        </div>
                        <div class="sap"></div>
                        <div class="card-innr">
                            <div class="card-head">
                                <h5 class="card-title card-title-sm">Token Sales Progress</h5>
                            </div>
                            <ul class="progress-info">
                                <li><span>Raised</span> <?php echo token_info()['volume_token'];?> XXA</li>
                                <li class="text-right"><span>TOTAL</span> <?php echo token_info()['total_circulating_supply'];?> XXA
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
                    <p>In order to receive your <a href="#"><strong>XXA Tokens</strong></a>, please select your wallet address and you have to put the address below input box. <strong>You will receive XXA tokens to this address after the Token Sale end.</strong></p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-item input-with-label">
                                    <label for="swalllet" class="input-item-label">XXA Wallet Addresses</label>
                                    <!-- <label for="swalllet" class="input-item-label">Select Wallet </label>
                                    <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                        <option value="ETH">Ethereum</option>
                                        <option value="LTC">Litcoin</option>
                                        <option value="BTC">BitCoin</option>
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

    
    <div class="modal fade" id="get-pay-address" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Payment Address for Deposit</h4>
                    <p>Please make deposit amount of <strong class="payAmount"><?php echo $amtToken;?> <?php echo $this->input->get('cs');?></strong> to our address and receive <strong class="buyTokenXXA"><?php echo $amount;?> XXA</strong> tokens including <!-- <strong>bonus 1,540 XXA</strong> once we recevied payment -->.</p>
                    <div class="gaps-1x"></div>
                    <h6 class="font-bold">Payment to the following <?php echo $this->input->get('cs');?> Address</h6>
                    <div class="copy-wrap mgb-0-5x">
                        <span class="copy-feedback"></span>
                        <image src="<?php echo base_url();?>public/node_modules/cryptocurrency-icons/svg/color/<?php echo strtolower($this->input->get('cs'));?>.svg" style="position: absolute;margin: 6px 0 0 6px;">
                        <input type="text" class="copy-address" value="<?php echo payment_wallet()[$this->input->get('cs')];?>" disabled="">
                        <button class="copy-trigger copy-clipboard" data-clipboard-text="<?php echo payment_wallet()[$this->input->get('cs')];?>"><em class="ti ti-files"></em></button>
                    </div>
                    <!-- <ul class="pay-info-list row">
                        <li class="col-sm-6"><span>SET GAS LIMIT:</span> 120 000</li>
                        <li class="col-sm-6"><span>SET GAS PRICE:</span> 95 Gwei</li>
                    </ul> -->
                    
                    <div class="pdb-2-5x pdt-1-5x">
                        <input type="checkbox" class="input-checkbox input-checkbox-md" id="agree-term">
                        <label for="agree-term">I hereby agree to the <strong>token purchase aggrement &amp; token sale term</strong>.</label>
                    </div>
                    <!-- <button class="btn btn-primary pay-confirm" data-dismiss="modal" data-toggle="modal" data-target="#pay-confirm">Continue If Deposited <em class="ti ti-arrow-right mgl-4-5x"></em></button> -->
                    <button class="btn btn-primary pay-confirm">Continue If Deposited <em class="ti ti-arrow-right mgl-4-5x"></em></button>
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
                    <p class="lead text-primary">Your Order no. <strong id="makeOrderNumber"><?php echo $makeOrderNumber;?></strong> has been placed successfully. </p>
                    <p>The tokens balance will appear in your account only after you transaction gets 6 confirmations and approved our team.</p>
                    <p>To <strong>speed up verification</strong> proccesing please enter <strong>your wallet address</strong> from where you’ll transferring your ethereum to our address.</p>
                    
                    <div class="input-item input-with-label">
                        <label for="token-address" class="input-item-label">Send From Wallet Address</label>
                        <input class="input-bordered" type="text" placeholder="Wallet Address" id="send-from-wallet-address">
                    </div><!-- .input-item -->
                     <div class="input-item input-with-label">
                        <label for="token-address" class="input-item-label">Transaction ID</label>
                        <input class="input-bordered" type="text" placeholder="Enter the transaction ID of this payment if available" id="transaction-id-got"> 
                    </div><!-- .input-item -->
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li><a href="#" class="btn btn-primary confirm-wallet-addr">Confirm Wallet Address</a></li>
                    </ul>

                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
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
    
    
    <div class="modal fade" id="pay-online" tabindex="-1">
      <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content pb-0">
                   
                 <div class="popup-body">
                     <h4 class="popup-title">Buy Tokens and Payment</h4>
                     <p class="lead">
                         To receiving <strong class="buyTokenXXA"><?php echo $amount;?> XXA</strong> tokens require payment amount of <strong class="payAmount">
                        <?php echo $amtToken;?> <?php echo $this->input->get('cs');?></strong>.
                    </p>
                    <p>You can choose any of following payment method to make your payment. The tokens balance will appear in your account after successfull payment.
                    </p>
                    <h5 class="mgt-1-5x font-mid">Select payment method:</h5>
                    <div class="pay-list guttar-20px"></div>
                    <div class="pay-item">
                    <input type="radio" class="pay-check" name="pay-option" id="pay-paypal" checked />
                    <label class="pay-check-label" for="pay-paypal">
                       Paypal
                    </label>
                    </div>
                    <div class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-coingate">
                            <label class="pay-check-label" for="pay-coingate">
                               BitPay
                    </div>
                    <span class="text-light font-italic mgb-2x"><small>* Payment gateway company may charge you a processing fees.</small>
                    </span>
                    <div class="pdb-2-5x pdt-1-5x">
                        <input type="checkbox" class="input-checkbox input-checkbox-md" id="agree-term-3">
                        <label for="agree-term-3">
                            I hereby agree to the  <strong>token purchase aggrement &amp; token sale term</strong>
                        </label>
                    </div>
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li>

                            <a href="javascript:void(0)" class="btn btn-primary buyTokenAndPay" data-amttoken="">
                                Buy Tokens &amp; Process to Pay <em class="ti ti-arrow-right mgl-2x"></em>
                            </a>

                        </li>
                    </ul>
                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
                    <div class="note note-plane note-light mgb-1x">
                        <em class="fas fa-info-circle"></em>
                        <p class="text-light">You will automatically redirect for payment after your order placing.</p>
                    </div>
                  </div> 
            </div>  
      </div>
   </div>
   
    
    
    <div class="modal fade" id="pay-coingate" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Buy Tokens and Payment</h4>
                    <p class="lead">To receiving <strong>18,750 XXA</strong> tokens including <strong>bonus 1,540 XXA</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can pay via online payment geteway <strong>Coingate</strong>. It’s safe and secure.</p>
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
                    <a href="<?php echo base_url();?>transactions" class="btn btn-primary">View Transaction</a>
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
    

