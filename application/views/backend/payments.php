<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                    
                    <?php if($section == 'payments') : ?>
                        <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">All Payment List</h4>
                            </div>
                            <table class="data-table dt-init user-list">
                                <thead>
                                    <tr class="data-item data-head">
    	                                <th class="data-col dt-user">User</th>
    	                                <th class="data-col dt-email">Order Number</th>
                                        <th class="data-col dt-login">Payment Method</th>
                                        <th class="data-col dt-login">Amount USD</th>
                                        <th class="data-col dt-login">Transaction ID</th>
                                        <th class="data-col dt-login">Created</th>
    	                                <th class="data-col dt-login">Updated</th> 
    	                                <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
    	                                <th class="data-col"></th>
                                    </tr>
                                </thead>
                                <tbody>




                                     <?php if(is_array($getAllPayments)){ ?>
                                     <?php foreach($getAllPayments as $payment){ ?>

                                    <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <span class="lead user-name"><a href="<?php echo base_url();?>backend/users/view_details/<?php echo $payment['user_id'];?>"><?php echo $payment['fname'];?></a></span>
                                        <span class="sub user-id"><?php echo $payment['exId'] ?></span>
                                    </td>
                                    <td class="data-col dt-user">
                                       
                                        <span class="sub user-id">
                                            <a href="<?php echo base_url();?>backend/orders/view_details/<?php echo $payment['oid'];?>"><?php echo $payment['order_number'];?></a>
                                        </span>
                                    </td>
                                    <td class="data-col dt-email">
                                        <span class="sub sub-s2 sub-email"><?php echo $payment['payment_method'];?></span>
                                    </td>
                                    <td class="data-col dt-token">
                                        <span class="lead lead-btoken"><?php echo $payment['amount'];?></span>
                                    </td>
                                    <td class="data-col dt-login">
                                        <span class="sub sub-s2 sub-time"><?php echo $payment['transaction_id'];?></span>
                                    </td>
                                    <td class="data-col dt-login">
                                        <span class="sub sub-s2 sub-time"><?php echo $payment['created'];?></span>
                                    </td>
                                    
                                   <td class="data-col dt-login">
                                        <span class="sub sub-s2 sub-time"><?php echo $payment['updated'];?></span>
                                    </td>

                                    <td class="data-col dt-login">
                                         <span class="dt-status-md badge badge-outline badge-<?php echo $payment['statusColor'];?> badge-md">
                                            <?php echo $payment['statusName'];?>
                                        </span>
                                    </td>

                                    <td class="data-col text-right">
                                        <div class="relative d-inline-block">
                                            <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                            <div class="toggle-class dropdown-content dropdown-content-top-left">
                                                <ul class="dropdown-list">
                                                    <li>
                                                        <a href="<?php echo base_url();?>backend/orders/payment_detail/<?php echo $payment['pid'];?>">
                                                        <em class="ti ti-eye"></em> View Detail</a>
                                                    </li>
                                                    <li>
                                                    	<a href="<?php echo base_url();?>backend/orders/payment_approve/<?php echo $payment['pid'];?>">
                                                    	<em class="ti ti-eye"></em> Approve</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>backend/orders/payment_pending/<?php echo $payment['pid'];?>">
                                                    	<em class="ti ti-na"></em> Pending</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>backend/orders/payment_suspend/<?php echo $payment['pid'];?>">
                                                    	<em class="ti ti-na"></em> Suspend</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url();?>backend/orders/payment_delete/<?php echo $payment['pid'];?>">
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
                    <?php endif ?>

                    <?php if($section == 'payment_detail') : ?>
                        
                    <?php endif ?>


                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                