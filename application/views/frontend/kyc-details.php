
    <?php
     $detail = $detail[0];
     $kyc    = json_decode($detail['kyc_detail'],true);
     ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">KYC Details</h4>
                        <div class="d-flex align-items-center guttar-20px">
                           
                            <?php if($detail['account_level']) { ?>
                              <div class="flex-col d-sm-block d-none">
                                <a href="kyc-list.html" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Account Level - <?php echo $detail['account_level'];?></a>
                              </div>
                            <?php } ?>
                            
                            
                            <div class="flex-col d-sm-none">
                                <a href="kyc-list.html" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                            </div>
                            <div class="relative d-inline-block">
                                <a href="#" class="btn btn-dark btn-sm btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                <div class="toggle-class dropdown-content dropdown-content-top-left">
                                    <ul class="dropdown-list">
                                        <li><a href="#"><em class="ti ti-check"></em>Edit KYC Request</a></li>
                                        <li><a href="#"><em class="ti ti-na"></em> Upgrade Level</a></li>
                                        <li><a href="#"><em class="ti ti-trash"></em> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex flex-wrap align-items-center justify-content-between">
                        <div class="fake-class">
                            <span class="data-details-title">Serial Number</span>
                            <span class="data-details-info"><?php echo strtoupper($detail['exid']);?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Submited On</span>
                            <span class="data-details-info"><?php echo $kyc['created'];?></span> 
                        </div>
                        <div class="fake-class"> 
                            <span class="data-details-title">Checked By</span>
                            <span class="data-details-info"><?php echo $detail['checked_by'];?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked On</span>
                            <span class="data-details-info"><?php echo $detail['checked_on'];?></span>
                        </div>
                        <div class="fake-class">
                            <span class="badge badge-md badge-block badge-success ucap">Approved</span>
                        </div>
                        <div class="gaps-2x w-100 d-none d-md-block"></div>
                        <?php if($detail['account_level']) { ?>
                        <div class="w-100">
                            <span class="data-details-title">Account Type</span>
                            <span class="data-details-info"><?php echo $detail['name'];?></span>
                        </div>
                        <?php } ?> 
                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Personal Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">First Name</div>
                            <div class="data-details-des"><?php echo $kyc['fname'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Last Name</div>
                            <div class="data-details-des"><?php echo $kyc['lname'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Email Address</div>
                            <div class="data-details-des"><?php echo $kyc['email'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Phone Number</div>
                            <div class="data-details-des"><?php echo $kyc['phone'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Date of Birth</div>
                            <div class="data-details-des"><?php echo $kyc['dob'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Full Address</div>
                            <div class="data-details-des">
                                <?php echo $kyc['address1'];?>
                                <?php echo @$kyc['address2'] ? @$kyc['address2'] : "";?>        
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Country of Residence</div>
                            <div class="data-details-des"><?php echo $kyc['nationality'];?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Telegram Username</div>
                            <div class="data-details-des"><span>@<?php echo $kyc['telegram'];?> <em class="far fa-paper-plane"></em></span></div>
                        </li><!-- li -->
                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Uploaded Documnets</h6>
                    <ul class="data-details-list">
                        


                       <?php if($kyc['documentType'] == 'passport'){ ?>
                            <li>
                            <div class="data-details-head"><?php echo ucfirst($kyc['documentType']);?> Card</div>
                            <ul class="data-details-docs">
                                <li>
                                    <span class="data-details-docs-title">Front Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url();?>uploads/<?php echo $kyc['passport'];?>" alt="passport">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li><!-- li -->
                       <?php }elseif($kyc['documentType'] == 'national-ID'){ ?>
                         <li>
                            <div class="data-details-head"><?php echo ucfirst($kyc['documentType']);?> Card</div>
                            <ul class="data-details-docs">
                                <li>
                                    <span class="data-details-docs-title">Front Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url();?>uploads/<?php echo $kyc['nationalID']['frontDoc'];?>" alt="passport">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                                <li>
                                    <span class="data-details-docs-title">Back Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url();?>uploads/<?php echo $kyc['nationalID']['backDoc'];?>" alt="passport">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                            </ul>
                        </li><!-- li -->
                       <?php }elseif($kyc['documentType'] == 'driving-license'){ ?>
                        <li>
                            <div class="data-details-head"><?php echo ucfirst($kyc['documentType']);?> Card</div>
                            <ul class="data-details-docs">
                                <li>
                                    <span class="data-details-docs-title">Front Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url();?>uploads/<?php echo $kyc['driverLicence'];?>" alt="passport">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                                
                            </ul>
                        </li><!-- li -->
                       <?php } ?>
                        




                    </ul>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
    