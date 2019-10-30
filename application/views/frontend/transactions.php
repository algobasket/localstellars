
    
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">User Transactions</h4>
                    </div>
                    <table class="data-table dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">Tranx NO</th>
                                <th class="data-col dt-token">Tokens</th>
                                <th class="data-col dt-amount">Amount</th>
                                <th class="data-col dt-usd-amount">USD Amount</th>
                                <th class="data-col dt-account">From</th>
                                <th class="data-col dt-type"><div class="dt-type-text">Type</div></th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php if(is_array($transactions)) : ?>
                            <?php foreach($transactions as $t) : ?>

                               <?php //print_r($t);?>
                            <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">
                                        
                                    <?php if($t['statusName'] == "active"){ ?>

                                        <div class="data-state data-state-active">
                                            <span class="d-none"><?php echo $t['statusName'];?></span>
                                        </div>
                                      
                                        <?php }else{ ?>

                                        <div class="data-state data-state-pending">
                                            <span class="d-none"><?php echo $t['statusName'];?></span>
                                        </div>

                                    <?php };?>

                                        
                                        <div class="fake-class">
                                            <span class="lead tnx-id"><?php echo $t['transaction_id'];?></span>
                                            <span class="sub sub-date"><?php echo proper_time($t['created']);?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php echo $t['buy_currency_amount'];?></span>
                                    <span class="sub sub-symbol">XXA</span>
                                </td>
                                <td class="data-col dt-amount">
                                    <span class="lead amount-pay"><?php echo $t['amount'];?></span>
                                    <span class="sub sub-symbol"><?php echo $t['amount_type'];?> <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 <?php echo $t['amount_type'];?> = <?php echo round(currencyPrice($t['amount_type'])/currencyPrice('XXA'),2);?> XXA"></em></span>
                                </td>
                                <td class="data-col dt-usd-amount">
                                    <span class="lead amount-pay"><?php echo $t['amount_usd'];?></span>
                                    <span class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 <?php echo $t['amount_type'];?> = <?php echo currencyPrice($t['amount_type']);?> USD"></em></span>
                                </td>
                                <td class="data-col dt-account">
                                    <span class="lead user-info"><?php echo $t['payment_method'];?></span>
                                    <span class="sub sub-date"><?php echo proper_time($t['created']);?></span>
                                </td>
                                <td class="data-col dt-type">

                                    <span class="dt-type-md badge badge-outline badge-success badge-md">
                                        <?php echo ucfirst($t['order_type']);?>
                                    </span>
                                    <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md"><?php echo substr($t['order_type'],0,1);?></span>
                                </td>
                                <td class="data-col text-right">
                                    <!-- <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                            <ul class="data-action-list">
                                                <li><a href="#" class="btn btn-auto btn-primary btn-xs"><span>Pay <span class="d-none d-xl-inline-block">Now</span></span><em class="ti ti-wallet"></em></a></li>
                                                <li><a href="#" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="data-action-list d-none d-md-inline-flex">
                                        <li><a href="#" class="btn btn-auto btn-primary btn-xs"><span>Pay <span class="d-none d-xl-inline-block">Now</span></span><em class="ti ti-wallet"></em></a></li>
                                        <li><a href="#" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                    </ul> -->
                                </td>
                            </tr><!-- .data-item -->
                          

                         <?php endforeach ?>
                         <?php endif ?> 




                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
    
    
    <!-- Modal Large -->
    <div class="modal fade" id="transaction-details" tabindex="-1">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body popup-body-lg">
                    <div class="content-area">
                        <div class="card-head d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Transaction Details</h4>
                        </div>
                        <div class="gaps-1-5x"></div>
                        <div class="data-details d-md-flex">
                            <div class="fake-class">
                                <span class="data-details-title">Tranx Date</span>
                                <span class="data-details-info">24 Jul, 2018 10:11PM</span>
                            </div>
                            <div class="fake-class">
                                <span class="data-details-title">Tranx Status</span>
                                <span class="badge badge-success ucap">Approved</span>
                            </div>
                            <div class="fake-class">
                                <span class="data-details-title">Tranx Approved Note</span>
                                <span class="data-details-info">By <strong>Admin</strong> at 24 Jul, 2018 10:12PM</span>
                            </div>
                        </div>
                        <div class="gaps-3x"></div>
                        <h6 class="card-sub-title">Transaction Info</h6>
                        <ul class="data-details-list">
                            <li>
                                <div class="data-details-head">Transaction Type</div>
                                <div class="data-details-des"><strong>Purchase</strong></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Payment Getway</div>
                                <div class="data-details-des"><strong>Ethereum <small>- Offline Payment</small></strong></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Deposit From</div>
                                <div class="data-details-des"><strong>0xa87d264f935920005810653734156d3342d5c385</strong></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Tx Hash</div>
                                <div class="data-details-des"><span>Tx156d3342d5c87d264f9359200xa058106537340385c87d264f93</span> <span></span></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Deposit To</div>
                                <div class="data-details-des"><span>0xa058106537340385156d3342d5c87d264f935920</span> <span></span></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Details</div>
                                <div class="data-details-des">Tokens Purchase</div>
                            </li><!-- li -->
                        </ul><!-- .data-details -->
                        <div class="gaps-3x"></div>
                        <h6 class="card-sub-title">Token Details</h6>
                        <ul class="data-details-list">
                            <li>
                                <div class="data-details-head">Stage Name</div>
                                <div class="data-details-des"><strong>ICO Phase 3</strong></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Contribution</div>
                                <div class="data-details-des">
                                    <span><strong>1.000 ETH</strong> <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="1 ETH = 100 XXA"></em></span>
                                    <span><em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="1 ETH = 100 XXA"></em> $2540.65</span>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Tokens Added To</div>
                                <div class="data-details-des"><strong>UD1020001 <small>- infoicox@gmail..com</small></strong></div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Token (T)</div>
                                <div class="data-details-des">
                                    <span>4,780.00</span>
                                    <span>(4780 * 1)</span>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Bonus Tokens (B)</div>
                                <div class="data-details-des">
                                    <span>956.00</span>
                                    <span>(956 * 1)</span>
                                </div>
                            </li><!-- li -->
                            <li>
                                <div class="data-details-head">Total Tokens</div>
                                <div class="data-details-des">
                                    <span><strong>5,736.00</strong></span>
                                    <span>(T+B)</span>
                                </div>
                            </li><!-- li -->
                        </ul><!-- .data-details -->
                    </div><!-- .card -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    
    

