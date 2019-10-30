<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <?php if($section == 'list') : ?>
                <div class="card content-area">
                  <div class="card-innr">
                       <div class="card-head">
                          <h4 class="card-title">Referrals List</h4>
                          <a href="<?php echo base_url();?>backend/schedule_events/create_event" class="float-right btn btn btn-primary btn-sm">Create Referral</a>
                          <br>
                       </div>
                       <table class="data-table dt-init user-list">
	                        <thead>
	                            <tr class="data-item data-head">
	                                <th class="data-col dt-user">Registered User</th>
	                                <th class="data-col dt-email">Referrer User</th>
	                                <th class="data-col dt-user">Referral ID</th>
	                                <th class="data-col dt-login">Created</th>
	                                <th class="data-col dt-login">Updated</th>
	                                <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
	                                <th class="data-col"></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                          <?php if(is_array($referrals)) : ?>
	                          <?php foreach($referrals as $row) : ?>
	  
	                            <tr class="data-item">
	                                <td class="data-col dt-user">
	                                    <span class="lead user-name"><?php echo $row['fname'] ?></span>
	                                    <span class="sub user-id"><?php echo $row['exId'] ?></span>
	                                </td>
	                                <td class="data-col dt-user">
	                          
	                                    <span class="sub user-id"><?php echo cUserDetailById($row['referrer_user_id'])['fname'] ?></span>
	                                </td>
	                                <td class="data-col dt-email">
	                                    <span class="sub sub-s2 sub-email"><?php echo $row['referral_id'] ?></span>
	                                </td>
	                                <td class="data-col dt-token">
	                                    <span class="lead lead-btoken"><?php echo $row['created'] ?></span>
	                                </td>
	                                <td class="data-col dt-verify">
	                                    <span class="lead lead-btoken"><?php echo $row['updated'] ?></span>
	                                </td>
	                               
	                                <td class="data-col dt-status">
	                                    <span class="dt-status-md badge badge-outline badge-<?php echo $row['statusColor'] ?> badge-md">
	                                    	<?php echo $row['statusName'] ?>
	                                    	</span>
	                                    <span class="dt-status-sm badge badge-sq badge-outline badge-<?php echo $row['statusColor'] ?> badge-md">A</span>
	                                </td>
	                                <td class="data-col text-right">
	                                    <div class="relative d-inline-block">
	                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
	                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
	                                            <ul class="dropdown-list">
	                                                <li><a href="#"><em class="ti ti-na"></em> Edit</a></li>
	                                                <li><a href="#"><em class="ti ti-trash"></em> Delete</a></li>
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
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                