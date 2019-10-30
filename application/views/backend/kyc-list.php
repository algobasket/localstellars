
   <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="content-area card">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">KYC List</h4>
                    </div>
                    <table class="data-table dt-init kyc-list">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-user">User</th>
                                <th class="data-col dt-doc-type">Doc Type</th>
                                <th class="data-col dt-doc-front">Documents</th>
                                <th class="data-col dt-doc-back">&nbsp;</th>
                                <th class="data-col dt-status">Status</th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($getAllKycs)) : ?>
                        <?php foreach($getAllKycs as $row) : ?>

                            <tr class="data-item">
                                <td class="data-col dt-user">
                                    <span class="lead user-name"><?php echo $row['fname'];?></span>
                                    <span class="sub user-id"><?php echo $row['exId'];?></span>
                                </td>
                                <?php if($row['kyc_detail']){ 
                                    $kycDetail = json_decode($row['kyc_detail'],true);
                                ?>
                                  <td class="data-col dt-doc-type">
                                    <span class="sub sub-s2 sub-dtype">
                                        <?php echo @$kycDetail['documentType'];?>
                                    </span>
                                </td>
                                
                                <?php if(@$kycDetail['documentType'] == 'passport'){ ?>
                                  

                                 <td class="data-col dt-doc-front" colspan="2">
                                    <a href="<?php echo base_url();?>uploads/<?php echo @$kycDetail['passport'] ;?>" class="image-popup">
                                    Document</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a>
                                </td>
                    

                                <?php }elseif(@$kycDetail['documentType'] == 'national-ID'){ ?>


                                 <td class="data-col dt-doc-front" >
                                    <a href="<?php echo base_url();?>uploads/<?php echo @$kycDetail['nationalID']['frontDoc'] ;?>" class="image-popup">
                                    Front Document</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a> 
                                 </td>
                                 <td class="data-col dt-doc-front" >
                                    <a href="<?php echo base_url();?>uploads/<?php echo @$kycDetail['nationalID']['backDoc'] ;?>" class="image-popup">
                                    Back Document</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a> 
                                 </td>

                                <?php }elseif(@$kycDetail['documentType'] == 'driver-licence'){ ?>

                                 <td class="data-col dt-doc-front" colspan="2">
                                    <a href="<?php echo base_url();?>uploads/<?php echo @$kycDetail['driver-licence'] ;?>" class="image-popup">
                                    Download Document</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a>
                                 </td>

                                <?php } ?>

                               

                                <?php }else{ ?>
                                  <td class="data-col dt-doc-type">
                                    <span class="sub sub-s2 sub-dtype">Not Submitted</span>
                                </td>
                                 <td class="data-col dt-doc-front">
                                   <span class="sub sub-s2 sub-dtype">Not Submitted</span>
                                </td>
                                <td class="data-col dt-doc-back">
                                    <span class="sub sub-s2 sub-dtype">Not Submitted</span>
                                </td>
                                <?php } ?>
                                
                               
                                <?php if($row['kyc_status'] == 0){ ?>

                                   <td class="data-col dt-status">
                                    <span class="dt-status-md badge badge-outline badge-default badge-md">
                                        Not Submitted                           
                                    </span>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-default badge-md">A</span>
                                   </td>
                                <?php }else{ ?>
                                    <td class="data-col dt-status">
                                    <span class="dt-status-md badge badge-outline badge-<?php echo status_info($row['kyc_status'])['statusColor'];?> badge-md">
                                        <?php echo ucfirst(status_info($row['kyc_status'])['statusName']);?>                            
                                    </span>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-<?php echo status_info($row['kyc_status'])['statusColor'];?> badge-md">A</span>
                                   </td>
                                <?php } ?>
                               
                               
                                <td class="data-col text-right"> 
                                   <?php if($row['kyc_status'] != 0){ ?> 
                                    <div class="relative d-inline-block">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
                                            <ul class="dropdown-list">
                                            <!-- <li><a href="kyc-details.html"><em class="ti ti-eye"></em> View Details</a></li> -->
                                            <li><a href="/backend/kycs/approve/<?php echo $row['user_id'];?>"><em class="ti ti-check"></em> Approve</a></li>
                                            <li><a href="/backend/kycs/progress/<?php echo $row['user_id'];?>"><em class="ti ti-check"></em> Progress</a></li>
                                            <li><a href="/backend/kycs/missing/<?php echo $row['user_id'];?>"><em class="ti ti-check"></em> Missing</a></li>
                                            <li><a href="/backend/kycs/reject/<?php echo $row['user_id'];?>"><em class="ti ti-na"></em> Reject</a></li>
                                            <li><a href="/backend/kycs/delete/<?php echo $row['user_id'];?>"><em class="ti ti-trash"></em> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
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