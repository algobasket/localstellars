
    
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content text-center">

                    <div class="col-lg-12 float-left">
                        <div class="content-area card card-secondary card-text-light">
                            <div class="card-innr">
                                <div class="card-head">
                                    <h6 class="card-title">Token Summary</h6>
                                </div>
                                <p>Total Circulating Supply  - <span class="text-success"><?php echo $token_info['total_circulating_supply'];?></span></p>
                                <p>Volume Token(24H)  - <span class="text-success"><?php echo $token_info['volume_token'];?></span></p>
                                <p>Remaining Token(24H)  - <span class="text-warning"><?php echo $token_info['total_circulating_supply'] - $token_info['volume_token'];?></span></p>
                            </div><!-- .card-innr -->
                        </div><!-- .card -->
                     </div><!-- .col -->

                     <div class="col-lg-12 float-left">
                        <div class="content-area card card-secondary card-text-light">
                            <div class="card-innr">
                                <div class="card-head">
                                    <h6 class="card-title">Users Card</h6>
                                </div>
                                <p>Total Customer  - <span class="text-success"><?php echo $user_card['total_customer'];?></span></p>
                                <p>Total Blocked   - <span class="text-danger"> <?php echo $user_card['total_blocked'];?></span></p>
                                <p>Total Activated - <span class="text-success"> <?php echo $user_card['total_activated'];?></span></p>
                                <p>Total Suspended - <span class="text-warning"> <?php echo $user_card['total_suspended'];?></span></p>
                            </div><!-- .card-innr -->
                        </div><!-- .card -->
                     </div><!-- .col -->

                     






                </div>
           
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->
    
