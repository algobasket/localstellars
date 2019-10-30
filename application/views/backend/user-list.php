<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                  <div class="card content-area">
                    <div class="card-innr">
                        <div class="card-head">
                            <h4 class="card-title">User List</h4>
                            <a href="<?php echo base_url();?>backend/users/expand" class="float-right">Expand</a>
                        </div>
                        <table class="data-table dt-init user-list">
                            <thead>
                                <tr class="data-item data-head">
                                    <th class="data-col dt-user">User</th>
                                    <th class="data-col dt-email">Email</th>
                                    <th class="data-col dt-email">Role</th>
                                    <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
                                    <th class="data-col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($getAllUsers)) : ?>
                                <?php foreach($getAllUsers as $row) : ?>
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo">
                                                <img src="images/user-a.jpg" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="lead user-name"><?php echo $row['fname'] ?></span>
                                                <span class="sub user-id"><?php echo $row['exId'] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-email">
                                        <span class="sub sub-s2 sub-email"><?php echo $row['email'] ?></span>
                                    </td>
                                    <td class="data-col dt-email">
                                        <span class="sub sub-s2 sub-email"><?php echo $row['role'] ?></span>
                                    </td>
                                    <td class="data-col dt-status">
                                        <?php if($row['statusCode'] == 1){ ?>
                                         <span class="dt-status-md badge badge-outline badge-success badge-md">Active</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">A</span>
                                       <?php }elseif($row['statusCode'] == 2){ ?>
                                         <span class="dt-status-md badge badge-outline badge-warning badge-md">Deactive</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-warning badge-md">A</span>
                                       <?php }elseif($row['statusCode'] == 3){ ?>
                                         <span class="dt-status-md badge badge-outline badge-danger badge-md">Suspended</span>
                                         <span class="dt-status-sm badge badge-sq badge-outline badge-danger badge-md">A</span>
                                       <?php } ?>
                                        
                                    </td>
                                    <td class="data-col text-right">
                                        <div class="relative d-inline-block">
                                            <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                            <div class="toggle-class dropdown-content dropdown-content-top-left">
                                                <ul class="dropdown-list">
                                                    <li><a href="<?php echo base_url();?>backend/users/view_details/<?php echo $row['user_id'] ?>"><em class="ti ti-eye"></em> View Details</a></li>
                                                    <li><a href="<?php echo base_url();?>backend/users/suspend/<?php echo $row['user_id'] ?>"><em class="ti ti-na"></em> Suspend</a></li>
                                                    <li><a href="<?php echo base_url();?>backend/users/delete/<?php echo $row['user_id'] ?>"><em class="ti ti-trash"></em> Delete</a></li>
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

                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                