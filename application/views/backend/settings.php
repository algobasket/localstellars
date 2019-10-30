<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">

                   <?php if($module == 'transaction-fees') : ?>
                   	<h3>Transaction Fees</h3>
                   	<?php echo form_open('backend/settings/backend_config/transaction-fees'); ?>
                   	<table class="table table-condensed table-sm text-center">		
            		<tr>
        			<th>
                	<textarea class="form-control" name="json" style="height:400px"><?php echo $json;?></textarea>
        			</th>
                    </tr>
                    <tr>
            			<th><input type="submit" name="save" value="Save" class="btn btn-primary" /></th>
                    </tr>	
                    </table>
                    <?php echo form_close() ?>
               
                   <?php endif ?>	
                  



                   <?php if($module == 'settings-list') : ?>
                   	<a href="<?php echo base_url();?>backend/settings/backend_config/transaction-fees" class="col-lg-4 float-left text-center">
                      <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h6 class="card-title">Transaction Fees</h6>
                            </div>
                            <p><em class="ikon ikon-coins" style="font-size: 125px"></em></p>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                   </a>
                    <a href="<?php echo base_url();?>backend/settings/maintainance_config" class="col-lg-4 float-left text-center">
                      <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h6 class="card-title">Maintainance</h6>
                            </div>
                            <p><em class="ikon ikon-coins" style="font-size: 125px"></em></p>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                   </a>
                   <a href="<?php echo base_url();?>backend/settings/exchange_ratings" class="col-lg-4 float-left text-center">
                      <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h6 class="card-title">Exchange Rate</h6>
                            </div>
                            <p><em class="ikon ikon-coins" style="font-size: 125px"></em></p>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                   </a>
                    
                   <?php endif ?>
                   
                   <?php if($module == "exchange_ratings") : ?>
                       <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Exchange Rating</h4>
                            </div>
                            <div class="card-text">
                                <p>Standard XXA Token Price List</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <p>
                              Rating auto update every 5 min via CRON via link 
                              <a href="<?php echo base_url();?>Api/cron/upsertCurrency"><?php echo base_url();?>Api/cron/upsertCurrency</a> OR you can also manually update my click that link
                            </p>
                            <table class="data-table dt-init activity-table" data-items="10">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Currency</span></th>
                                        <th class="data-col activity-device"><span>USD Price</span></th>
                                        <th class="data-col activity-device"><span>Token Price</span></th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                	
                                    <tr class="data-item">
                                        <td class="data-col activity-time">ETH</td>
                                        <td class="data-col activity-device"><span><?php echo currencyPrice('ETH');?> USD</span></td>
                                        <td class="data-col activity-device"><?php echo round(currencyPrice('ETH')/currencyPrice('XXA'),2);?> XXA</td>
                                    </tr>
                                    <tr class="data-item">
                                        <td class="data-col activity-time">BTC</td>
                                        <td class="data-col activity-device"><span><?php echo currencyPrice('BTC');?> USD</span></td>
                                        <td class="data-col activity-device"><?php echo round(currencyPrice('BTC')/currencyPrice('XXA'),2);?> XXA</td>
                                    </tr>
                                     <tr class="data-item">
                                        <td class="data-col activity-time">XXA</td>
                                        <td class="data-col activity-device"><span><?php echo currencyPrice('XXA');?> USD</span></td>
                                        <td class="data-col activity-device"><?php echo round(currencyPrice('XXA')/currencyPrice('XXA'),2);?> XXA</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card --> 
                   <?php endif ?>
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                