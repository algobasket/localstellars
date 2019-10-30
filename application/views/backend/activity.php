<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Activity</h4>
                            </div>
                            <div class="card-text">
                                <p>Here is your recent activities. You can clear your log  or disable tracking option from security settings. </p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class="data-table dt-init activity-table" data-items="10">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Date</span></th>
                                        <th class="data-col activity-device"><span>Type</span></th>
                                        <th class="data-col activity-device"><span>Device</span></th>
                                        <th class="data-col activity-browser"><span>Browser</span></th>
                                        <th class="data-col activity-ip"><span>IP</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($activityLog)){ ?>
                                    
                                    <?php foreach($activityLog as $r){ ?>
                                        <tr class="data-item">
                                        <td class="data-col activity-time"><?php echo $r['date'];?></td>
                                        <td class="data-col activity-time"><?php echo $r['device_type'];?></td>
                                        <td class="data-col activity-device"><?php echo $r['device'];?></td>
                                        <td class="data-col activity-browser"><?php echo $r['browser'];?></td>
                                        <td class="data-col activity-ip"><?php echo $r['ip'];?></td>
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