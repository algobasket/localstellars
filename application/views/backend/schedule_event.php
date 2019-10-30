<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                    

             <?php if($section == 'list') : ?>
                <div class="card content-area">
                  <div class="card-innr">
                       <div class="card-head">
                          <h4 class="card-title">Schedule Event List</h4>
                          <a href="<?php echo base_url();?>backend/schedule_events/create_event" class="float-right btn btn btn-primary btn-sm">Create Schedule Event</a>
                          <br>
                       </div>
                       <table class="data-table dt-init user-list">
	                        <thead>
	                            <tr class="data-item data-head">
	                                <th class="data-col dt-user">Name</th>
	                                <th class="data-col dt-email">Start Date</th>
	                                <th class="data-col dt-token">End Date</th>
	                                <th class="data-col dt-verify">Min Purchase {ETH}</th>
	                                <th class="data-col dt-login">Asset Distribute</th>
	                                <th class="data-col dt-login">Bonus Percentage</th>
	                                <th class="data-col dt-login">Created/Updated</th>
	                    
	                                <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
	                                <th class="data-col"></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                          <?php if(is_array($events)) : ?>
	                          <?php foreach($events as $row) : ?>
	  
	                            <tr class="data-item">
	                                <td class="data-col dt-user">
	                                    <span class="lead user-name"><?php echo $row['schedule_name'] ?></span>
	                                   
	                                </td>
	                                <td class="data-col dt-user">
	                          
	                                    <span class="sub user-id"><?php echo proper_time($row['start_date']) ?></span>
	                                </td>
	                                <td class="data-col dt-email">
	                                    <span class="sub sub-s2 sub-email"><?php echo proper_time($row['end_date']) ?></span>
	                                </td>
	                                <td class="data-col dt-token">
	                                    <span class="lead lead-btoken"><?php echo $row['min_purchase'] ?></span>
	                                </td>
	                                <td class="data-col dt-verify">
	                                    <span class="lead lead-btoken"><?php echo $row['asset_distribute'] ?></span>
	                                </td>
	                                <td class="data-col dt-login">
	                                    <span class="sub sub-s2 sub-time"><?php echo $row['bonus_percentage'] ?></span>
	                                </td>
	                                <td class="data-col dt-login">
	                                    <span class="sub sub-s2 sub-time">
	                                    	<?php echo proper_time($row['created']) ?><br>
	                                    	<?php echo proper_time($row['updated']) ?>	
	                                    	</span>
	                                </td>
	                                
	                               
	                                <td class="data-col dt-status">
	                                    <span class="dt-status-md badge badge-outline badge-<?php echo $row['statusColor'] ?> badge-md"><?php echo ucfirst($row['statusName']) ?></span>
	                                    <span class="dt-status-sm badge badge-sq badge-outline badge-<?php echo $row['statusColor'] ?> badge-md">A</span>
	                                </td>
	                                <td class="data-col text-right">
	                                    <div class="relative d-inline-block">
	                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
	                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
	                                            <ul class="dropdown-list">
	                                            	<li><a href="<?php echo base_url();?>backend/schedule_events/updateEventStatus/<?php echo $row['id'];?>/1">
	                                                	<em class="ti ti-na"></em>Activate</a>
	                                                </li>
	                                                <li><a href="<?php echo base_url();?>backend/schedule_events/updateEventStatus/<?php echo $row['id'];?>/2">
	                                                	<em class="ti ti-na"></em>Deactivate</a>
	                                                </li> 
	                                                <li><a href="<?php echo base_url();?>backend/schedule_events/update_event/<?php echo $row['id'];?>">
	                                                	<em class="ti ti-na"></em>Edit</a>
	                                                </li>
	                                                <li> 
	                                                	<a href="<?php echo base_url();?>backend/schedule_events/delete_event/<?php echo $row['id'];?>"><em class="ti ti-trash"></em> Delete</a>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </td>
	                            </tr><!-- .data-item -->
	                          <?php endforeach ?>
	                          <?php endif ?>
	                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
            <?php endif ?>	
            


             <?php if($section == 'create_event') : ?>
                 <div class="content-area card">
                        <div class="card-innr card-innr-fix">
                            <div class="card-head">
                                <h6 class="card-title">Create Schedule Event</h6>
                            </div>
                            <div class="gaps-1x"></div><!-- .gaps -->
                            <?php echo form_open('backend/schedule_events/create_event'); ?>
                                <?php echo getFlash();?>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Name</label>
                                    <input class="input-bordered" type="text" name="schedule_name" placeholder="Schedule Event Name" required>
                                </div>
                                <div class="input-item input-with-label">
                                   <div class="row">
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">Start Date</label>
		                                        <div class="relative">
		                                            <input class="input-bordered date-picker" value="08/22/2019" type="text" id="date-of-birth" name="start_date" required>
		                                            <span class="input-icon input-icon-right date-picker-icon"><em class="ti ti-calendar"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">Start Time</label>
		                                        <div class="relative">
		                                            <input class="input-bordered time-picker" value="12:00" type="text" name="start_time" required>
		                                            <span class="input-icon input-icon-right time-picker-icon"><em class="ti ti-alarm-clock"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
                                   </div>
                                </div>
                                 <div class="input-item input-with-label">
                                    <div class="row">
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">End Date</label>
		                                        <div class="relative">
		                                            <input class="input-bordered date-picker" value="08/22/2019" type="text" id="date-of-birth" name="end_date" required>
		                                            <span class="input-icon input-icon-right date-picker-icon"><em class="ti ti-calendar"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">End Time</label>
		                                        <div class="relative">
		                                            <input class="input-bordered time-picker" value="12:00" type="text" name="end_time" required>
		                                            <span class="input-icon input-icon-right time-picker-icon"><em class="ti ti-alarm-clock"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
                                   </div>
                                </div>
                                <div class="input-item input-with-label"> 
                                    <label class="input-item-label text-exlight">Min Purchase</label>
                                    <input class="input-bordered" type="text" name="min_purchase" placeholder="Min Purchase" required>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Asset Distribute</label>
                                    <input class="input-bordered" type="text" name="asset_distribute" placeholder="Asset Distribute" required>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Bonus Pecentage</label>
                                    <input class="input-bordered" type="number" name="bonus_percentage" placeholder="Bonus Percentage" required>
                                </div>
                                <div class="gaps-1x"></div>
                                <input type="submit" name="create" class="btn btn-primary" value="Save"/>
                           <?php echo form_close();?>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
             <?php endif ?>	
             
             <?php if($section == "update_event") : ?>
                
             	 <div class="content-area card">
                        <div class="card-innr card-innr-fix">
                            <div class="card-head">
                                <h6 class="card-title">Edit Schedule Event</h6>
                            </div>
                            <div class="gaps-1x"></div><!-- .gaps -->
                            <?php echo form_open('backend/schedule_events/update_event/'.$this->uri->segment(4)); ?>
                                <?php echo getFlash();?>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Name</label>
                                    <input class="input-bordered" type="text" name="schedule_name" placeholder="Schedule Event Name" value="<?php echo $events['schedule_name'];?>" required>
                                </div>
                                <div class="input-item input-with-label">
                                   <div class="row">
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">Start Date</label>
		                                        <div class="relative">
		                                            <input class="input-bordered date-picker" value="<?php $start = explode(' ',$events['start_date']);echo $start[0];?>" type="text" id="date-of-birth" name="start_date" required>
		                                            <span class="input-icon input-icon-right date-picker-icon"><em class="ti ti-calendar"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">Start Time</label>
		                                        <div class="relative">
		                                            <input class="input-bordered time-picker" value="<?php $start = explode(' ',$events['start_date']);echo $start[1];?>" type="text" name="start_time" required>
		                                            <span class="input-icon input-icon-right time-picker-icon"><em class="ti ti-alarm-clock"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
                                   </div>
                                </div>
                                 <div class="input-item input-with-label">
                                    <div class="row">
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">End Date</label>
		                                        <div class="relative">
		                                            <input class="input-bordered date-picker" value="<?php $end = explode(' ',$events['end_date']);echo $end[0];?>" type="text" id="date-of-birth" name="end_date" required>
		                                            <span class="input-icon input-icon-right date-picker-icon"><em class="ti ti-calendar"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="input-item input-with-label">
		                                        <label class="input-item-label">End Time</label>
		                                        <div class="relative">
		                                            <input class="input-bordered time-picker" value="<?php $end = explode(' ',$events['end_date']);echo $end[1];?>" type="text" name="end_time" required>
		                                            <span class="input-icon input-icon-right time-picker-icon"><em class="ti ti-alarm-clock"></em></span>
		                                        </div>
		                                    </div>
		                                </div>
                                   </div>
                                </div>
                                <div class="input-item input-with-label"> 
                                    <label class="input-item-label text-exlight">Min Purchase</label>
                                    <input class="input-bordered" type="text" name="min_purchase" placeholder="Min Purchase" value="<?php echo $events['min_purchase'];?>" required>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Asset Distribute</label>
                                    <input class="input-bordered" type="text" name="asset_distribute" placeholder="Asset Distribute" value="<?php echo $events['asset_distribute'];?>" required>
                                </div>
                                <div class="input-item input-with-label">
                                    <label class="input-item-label text-exlight">Bonus Pecentage</label>
                                    <input class="input-bordered" type="number" name="bonus_percentage" value="<?php echo $events['bonus_percentage'];?>" placeholder="Bonus Percentage" required>
                                </div>
                                <div class="gaps-1x"></div>
                                <input type="submit" name="update" class="btn btn-primary" value="Save"/>
                           <?php echo form_close();?>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->

             <?php endif ?>	








                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                