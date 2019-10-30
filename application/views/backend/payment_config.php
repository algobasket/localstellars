<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Payment Settings</h4>
                                <span class="notify float-right"></span>
                            </div>
                            <div class="card-text">
                                <p>Only use XLM based address variant of XXA</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            
                            <?php echo form_open('backend/settings/payment_config');?>
                           
                            <table class="data-table dt-init activity-table" data-items="10">
                                <tbody>
                            
                                    <tr class="data-item">
                                        <th class="data-col activity-time">
                                            <span>
                                                Payment Wallets   
                                            </span>
                                        </th>
                                        <th class="data-col activity-time">
                                            <span>
                                             <textarea class="input-bordered input-textarea" name="json_data" placeholder="Paste Your Json payment object" required="">
                                                <?php echo $payment['json'];?></textarea>      
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="data-item">
                                       
                                        <th class="data-col activity-time">
                                            <span>
                                                   
                                            </span>
                                        </th>
                                        <th class="data-col activity-time">
                                            <span>
                                                <input type="submit" name="save" value="Save Changes" class="btn btn-primary" />   
                                            </span>
                                        </th>
                                    </tr>

                                </tbody>

                            </table>
                            <?php echo form_close();?>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                