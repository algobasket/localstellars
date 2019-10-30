
    
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 main-content">
                    <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Referral Program</h4>
                            </div>
                            <div class="card-text">
                                <p>In this program earning amount will be automatically deposited to user's account as XXA tokens at the end of each month. <br>10% will be earned from referred users if they buy tokens</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class="data-table dt-init activity-table" data-items="10">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Joined Date</span></th>
                                        <th class="data-col activity-device"><span>User</span></th>
                                        <th class="data-col activity-device"><span>Earned</span></th>
                                        <th class="data-col activity-browser"><span>Status</span></th>
                                        <th class="data-col activity-ip"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($referrals)){ ?>
                                    
                                    <?php foreach($referrals as $r){ ?>
                                        <tr class="data-item">
                                        <td class="data-col activity-time"><?php echo proper_time($r['createdRef']);?></td>
                                        <td class="data-col activity-time"><?php echo $r['fname'];?></td>
                                        <td class="data-col activity-device"><?php echo $r['earning'] ? $r['earning'] : 0;?></td>
                                        <td class="data-col activity-browser"><?php echo $r['statusName'];?></td>
                                        <td class="data-col activity-ip"></td>
                                    </tr>
                                    <?php } ?>
                                    
                                    <?php }else{ ?>

                                    <?php } ?>     
                                    <!-- <tr class="data-item">
                                        <td class="data-col activity-time">08-16-2018 09:04PM</td>
                                        <td class="data-col activity-device">Mac</td>
                                        <td class="data-col activity-browser">Chrome</td>
                                        <td class="data-col activity-ip">198.51.100.0</td>
                                    </tr> -->
                                   
                                </tbody>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
                
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->
    
   