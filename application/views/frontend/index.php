
<div class="page-content">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">
                   <h1>Dashboard | <?php echo currentBaseCurrency();?></h1>
                   <h4>On this page you can view and manage your advertisements and trades.</h4><br>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                    <img src="<?php echo $baseurl;?>/public/images/stellar_xlm-512.png" alt="logo" style="width: 100%">
                                </div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">
                                        <?php lang('common_tokensBalance');?>
                                    </h6>
                                    <span class="lead">
                                      <?php echo cUserDetail()['wallet'] ? cUserDetail()['wallet'] * currencyPrice(currentFiatBaseCurrency()) : 0;?> <?php echo currentFiatBaseCurrency();?>
                                    <span><?php lang('common_twz');?></span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title"><?php lang('common_stellars_balance');?></h6>


                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['eth'] ? @$contributions['eth'] : 0;?></span>
                                        <span class="sub">XLM</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead"><?php echo @$contributions['btc'] ? @$contributions['btc'] : 0;?></span>
                                        <span class="sub">XLMG</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-8">
                    <div class="token-information card card-full-height">
                        <div class="row no-gutters height-100">
                            <div class="col-md-6 text-center">
                                <div class="token-info">
                                    <img class="token-info-icon" src="<?php echo $baseurl;?>/public/images/394-3949898_stellar-logo-xlm-logo-png-clipart.png" alt="logo-sm">
                                    <div class="gaps-2x"></div>
                                    <h1 class="token-info-head text-light">
                                        1 XLM = <?php echo currencyPrice('XLM') * currencyPrice(currentFiatBaseCurrency());?> 
                                        <?php echo currentFiatBaseCurrency();?> 
                                    </h1>
                                    <h5 class="token-info-sub">
                                        1 XLMG = <?php echo currencyPrice('XLMG') * currencyPrice(currentFiatBaseCurrency());?>
                                        <?php echo currentFiatBaseCurrency();?>       
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="token-info bdr-tl">
                                    <div>
                                        <ul class="token-info-list">
                                            <li><center><?php echo lang('common_createAdsNotes');?></center></li>
                                        </ul>
                                        <a href="<?php echo base_url();?>advertise" class="btn btn-primary"><em class="fas fa-download mr-3"></em><?php lang('site_create_advertisement');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-xl-8 col-lg-7">
                    <div class="token-transaction card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title"><?php lang('common_your_ads');?></h4>
                                <div class="card-opt">
                                    <a href="<?php echo base_url();?>transactions" class="link ucap">View ALL <em class="fas fa-angle-right ml-2"></em></a>
                                </div>
                            </div>
                            <p>You can create a maximum of 5 advertisements. The limit is based on your 30 day volume, which is 0.01530820 <?php echo currentBaseCurrency();?>. To learn more about advertisement limits, click here.</p>
                            <table class="table tnx-table">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Info</th>
                                        <th>Price</th>
                                        <th>Equation</th>
                                        <th class="d-none d-sm-table-cell tnx-date">Created At</th>
                                        <th class="tnx-type"><div class="tnx-type-text"></div></th>
                                    </tr><!-- tr -->
                                </thead><!-- thead -->
                                <tbody>
                                    <?php if(is_array($orders)) : ?>
                                    <?php foreach($orders as $order) : ?>

                                     <tr>
                                        <td>
                                            <div class="d-flex align-items-center">


                                                  <?php if($order['orderStatus'] == 4){ ?>
                                                      <div class="data-state data-state-progress"></div>
                                                  <?php }elseif($order['orderStatus'] == 1){ ?>
                                                      <div class="data-state data-state-approved"></div>
                                                  <?php } ?>


                                                <span class="lead"><?php echo $order['buy_currency_amount'];?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <span>
                                                <span class="lead"><?php echo $order['amount'];?> </span>
                                                   <span class="sub">
                                                    <?php echo $order['amount_type'];?>
                                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" data-original-title="1 <?php echo $order['amount_type'];?> = <?php echo currencyPrice($order['amount_type']);?> USD"></em></span>
                                            </span>
                                        </td>
                                        <td class="d-none d-sm-table-cell tnx-date">
                                            <span class="sub sub-s2"><?php echo $order['orderCreated'];?></span>
                                        </td>
                                        <td class="tnx-type">

                                            <?php if($order['order_type'] == "purchase"){ ?>
                                               <span class="tnx-type-md badge badge-outline badge-success badge-md"><?php echo $order['order_type'];?></span>
                                              <span class="tnx-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                                            <?php }elseif($order['order_type'] == "bonus"){ ?>
                                               <span class="tnx-type-md badge badge-outline badge-warning badge-md">
                                                <?php echo $order['order_type'];?></span>
                                              <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">P</span>
                                            <?php } ?>

                                        </td>
                                    </tr>

                                    <?php endforeach ?>
                                    <?php endif ?>

                                </tbody><!-- tbody -->
                            </table><!-- .table -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="token-calculator card card-full-height">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">
                                    <?php echo currentBaseCurrencyDetail()['currency_name'];?> Calculator</h4>
                                <p class="card-title-text"></p>
                            </div>
                            <div class="token-calc">
                                <div class="token-pay-amount">
                                    <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">
                                    <div class="token-pay-currency">
                                        <a href="#" class="link ucap link-light toggle-tigger toggle-caret displaySymbol" onclick="$('.dropCurrency').show()">USD</a>
                                        <div class="toggle-class dropdown-content dropCurrency">
                                            <ul class="dropdown-list">
                                                <?php if(is_array(currencies('fiat'))) : ?>
                                                 <?php foreach(currencies('fiat') as $r) : ?>
                                                 
                                                  <li onclick="$('.dropCurrency').hide()"><a href="javascript:void(0)" class="cal" data-asset="<?php echo $r['currency_symbol'];?>"><?php echo $r['currency_symbol'];?></a></li>
                                                 
                                                  <?php endforeach ?>
                                                <?php endif ?>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-received">
                                    <div class="token-eq-sign">=</div>
                                    <div class="token-received-amount">
                                        <h5 class="token-amount">
                                            <?php echo currencyPrice(currentBaseCurrency());?>
                                        </h5>
                                        <div class="token-symbol"><?php echo currentBaseCurrency();?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="token-calc-note note note-plane">
                                <em class="fas fa-info-circle text-light"></em>
                                <span class="note-text text-light"><?php lang('common_AmountCalBasedCurrentTokensPrice');?></span>
                            </div>
                            <div class="token-buy">
                                <a href="javascript:void(0)" data-currencySymbol="ETH" data-amtToken="1" data-xxaToken="<?php echo currencyPrice(currentBaseCurrency());?>" class="btn btn-primary buyToken"><?php lang('common_buyTokens');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="token-sale-graph card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title"><?php echo currentBaseCurrency();?> <?php lang('common_tokensSaleGraph');?></h4>
                                <div class="card-opt">
                                    <a href="javascript:void(0)" onclick="tokensSaleGraph(7)" class="link ucap link-light toggle-tigger toggle-caret">7 Days</a>
                                    <div class="toggle-class dropdown-content">
                                        <ul class="dropdown-list">
                                            <li onclick="tokensSaleGraph(30)"><a href="javascript:void(0)">30 days</a></li>
                                            <!-- <li onclick="tokensSaleGraph(1)"><a href="javascript:void(0)">1 years</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-tokensale">
                                <canvas id="tknSale"></canvas>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-xl-4 col-lg-5">
                    <div class="token-sales card card-full-height">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">
                                    <?php echo currentBaseCurrency();?>  
                                    <?php echo cUserDetail()['acctlvl'];?>
                                    <?php lang('common_tokenSalesProgress');?></h4>
                            </div>
                            <ul class="progress-info">
                                <li><span>HOLDING</span> <?php echo token_info()['volume_token'];?> <?php echo currentBaseCurrency();?></li>
                                <li class="text-right"><span>LIMIT</span> <?php echo cUserDetail()['holding_end_limit'];?> <?php echo currentBaseCurrency();?></li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" data-percent="83" style="width: 83%;">
                                    <div>High <?php echo currentBaseCurrency();?><span><?php echo cUserDetail()['holding_end_limit'] * 75/100;?></span></div>
                                </div>
                                <div class="progress-scap" data-percent="24" style="width: 24%;">
                                    <div>Low <?php echo currentBaseCurrency();?> <span><?php echo cUserDetail()['holding_end_limit'] * 25/100;?></span></div>
                                </div>
                                <div class="progress-percent" data-percent="28" style="width: 28%;"></div>
                            </div>

                            <span class="card-sub-title mgb-0-5x">
                            Annual Incoming Trade and Transaction Volume:</span>
                            <h4 class="text-default">
                                <?php echo token_info()['volume_token'];?> <?php echo currentBaseCurrency();?> / <?php echo cUserDetail()['holding_end_limit'];?> <?php echo currentBaseCurrency();?></h4>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->

           <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="token-sale-graph card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title"><?php lang('common_recent_notifications');?></h4>
                                <div class="card-opt">
                                    <a href="<?php echo base_url();?>welcome/all_notifications" class="link ucap link-light toggle-caret"><?php echo lang('common_all_notifications');?></a>
                                </div>
                            </div>
                            <div class="chart-tokensale">
                                <canvas id="tknSale"></canvas>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-xl-4 col-lg-5">
                    <div class="token-sales card card-full-height">
                        <div class="card-innr">
                            <div class="card-head">
                              <h4 class="card-title"><?php lang('common_vacation');?></h4>
                            </div>
                            <b><input type="checkbox" id="sellingVac" /> Selling Vacation</b><br> 
                            <small>Disable all your advertisements for sale temporarily</small><br> 
                            <b><input type="checkbox" id="buyingVac" /> Buying Vacation</b><br>   
                            <small>Disable all your advertisements for purchase temporarily</small> 
                            <br>
                            <a href="#" class="bth btn-primary btn-sm btn_vacation">Save</a>
                            <span id="vacation_s"></span>
                        </div> 
                    </div>
                </div>
            </div><!-- .row --> 

        </div><!-- .container -->
    </div><!-- .page-content -->
