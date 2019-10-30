<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                    <div class="card content-area">
                    <div class="card-innr">
                        <div class="card-head">
                            <h4 class="card-title">Order List</h4>
                        </div>
                        <table class="data-table dt-init user-list">
                            <thead>
                                <tr class="data-item data-head">
	                                <th class="data-col dt-user">User</th>
	                                <th class="data-col dt-email">Email</th>
	                                <th class="data-col dt-token">Tokens</th>
	                                <th class="data-col dt-login">Payment Method</th>
	                                <th class="data-col dt-verify">Verified Status</th>
	                                
	                                <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
	                                <th class="data-col"></th>
                                </tr>
                            </thead>
                            <tbody>



                                 <?php //print_r($getAllOrders);?>
                                 <?php if(is_array($getAllOrders)){ ?>
                                 <?php foreach($getAllOrders as $order){ ?>

                                 <tr class="data-item">
                                <td class="data-col dt-user">
                                    <span class="lead user-name"><?php echo $order['fname'];?></span>
                                    <span class="sub user-id"><?php echo $order['exId'];?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="sub sub-s2 sub-email"><?php echo $order['email'];?></span>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead lead-btoken"><?php echo $order['wallet'] ? $order['wallet'] : 0;?></span>
                                </td>
                                <td class="data-col dt-login">
                                    <span class="sub sub-s2 sub-time"><?php echo $order['payment_method'];?></span>
                                </td>
                                <td class="data-col dt-verify">

                                    <ul class="data-vr-list">
	                                    <?php if($order['email_status'] == 1){ ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> Email</li>
                                        <?php }else{ ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> Email</li>
                                        <?php } ?>

                                        <?php if($order['kyc_status'] == 1){ ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> KYC</li>
                                        <?php }else{ ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>

                                    </ul>
                                </td>
                                
                                <td class="data-col dt-status">

                                    <?php if($order['orderStatus'] == 1){ ?>
                                         <span class="dt-status-md badge badge-outline badge-success badge-md">Active</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">A</span>
                                       <?php }elseif($order['orderStatus'] == 2){ ?>
                                         <span class="dt-status-md badge badge-outline badge-warning badge-md">Deactive</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-warning badge-md">D</span>
                                       <?php }elseif($order['orderStatus'] == 3){ ?>
                                         <span class="dt-status-md badge badge-outline badge-danger badge-md">Suspended</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-danger badge-md">S</span>
                                     <?php }elseif($order['orderStatus'] == 4){ ?>
                                         <span class="dt-status-md badge badge-outline badge-warning badge-md">Pending</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-warning badge-md">P</span>
                                     <?php } ?>
                                </td>
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
                                            <ul class="dropdown-list">
                                                <li>
                                                	<a href="<?php echo base_url();?>backend/orders/approve/<?php echo $order['oid'];?>">
                                                	<em class="ti ti-eye"></em> Approve</a>
                                                </li>
                                                <li><a href="<?php echo base_url();?>backend/orders/pending/<?php echo $order['oid'];?>">
                                                	<em class="ti ti-na"></em> Pending</a>
                                                </li>
                                                <li><a href="<?php echo base_url();?>backend/orders/suspend/<?php echo $order['oid'];?>">
                                                	<em class="ti ti-na"></em> Suspend</a>
                                                </li>
                                                <li><a href="<?php echo base_url();?>backend/orders/delete/<?php echo $order['oid'];?>">
                                                	<em class="ti ti-trash"></em> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr><!-- .data-item -->
                        
                        <?php } ?>
                        <?php } ?>

                            </tbody>
                        </table>
                    </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                