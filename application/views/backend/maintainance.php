<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">

                  <?php if($this->uri->segment(4) == "create"){ ?>
                   <div class="content-area card">
                        <div class="card-innr card-innr-fix">
                            <div class="card-head">
                                <h6 class="card-title">Create New Site Maintainance</h6>
                            </div>
                            <div class="gaps-1x"></div><!-- .gaps -->
                            <?php echo form_open('backend/settings/create'); ?>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Title</label>
                                    <input class="input-bordered" type="text" name="titleM" placeholder="Insert Title" required>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Message</label>
                                    <textarea class="input-bordered input-textarea" name="messageM" placeholder="Enter Message" required></textarea>
                                </div>
                                <div class="gaps-1x"></div>
                                <input type="submit" name="submit" class="btn btn-primary" value="Save"/>
                           <?php echo form_close();?>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                   <?php }else{ ?>
                    
                    <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Site Maintainance</h4>
                                <a href="<?php echo base_url();?>backend/settings/maintainance_config/create" class="float-right">Create New Maintainance</a>
                            </div>
                            <div class="card-text">
                                <p>Choose your maintainance alert message when the site is offline for a cause</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class="data-table dt-init activity-table" data-items="10">
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Title</span></th>
                                        <th class="data-col activity-device"><span>Message</span></th>
                                        <th class="data-col activity-browser"><span>Status</span></th>
                                        <th class="data-col activity-browser"><span>Action</span></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php foreach($list as $row) { 
                                      $j = json_decode($row['json'],true);
                                    ?>
                                    <tr class="data-item">
                                        <td class="data-col activity-time"><?php echo $j['title'] ;?></td>
                                        <td class="data-col activity-device"><?php echo $j['message'];?></td>
                                        <td class="data-col activity-browser">
                                         <?php if($row['status'] == 1){ ?>
                                           <span class="text-success">Running</span>
                                         <?php }else{ ?>
                                            <span class="text-danger">Stopped</span>
                                         <?php } ?>	
                                        </td>
                                        <th class="data-col activity-browser">
                                        	<?php if($row['status'] == 1){ ?>
                                           <a href="<?php echo base_url();?>backend/settings/deactivate/<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Deactive</a>
                                         <?php }else{ ?>
                                           <a href="<?php echo base_url();?>backend/settings/activate/<?php echo $row['id'];?>" class="btn btn-success btn-sm">Activate</a>
                                         <?php } ?>	
                                        </th>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                    
                   <?php } ?>
                   


                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                