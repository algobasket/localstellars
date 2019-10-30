
    
    
    <div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                    <h2 class="page-title">Begin your ID-Verification</h2>
                    <p class="large">Verify your identity to participate in tokensale.</p>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-header -->
    <?php echo form_open_multipart('kyc/form','id="kycForm"');?>   
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="kyc-form-steps card mx-lg-4">
                        <div class="form-step form-step1">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">01</div>
                                    <div class="step-head-text">
                                        <h4>Personal Details</h4>
                                        <p>Your simple personal information required for identification</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="note note-plane note-light-alt note-md pdb-1x">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">First Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="fname" value="<?php echo $user['fname'];?>" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Last Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="lname" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Email Address <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="email" value="<?php echo $user['email'];?>" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Phone Number <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="phone" value="<?php echo $user['mobile_number'];?>" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Date of Birth <span class="text-danger">*</span></label>
                                            <input class="input-bordered date-picker" type="text" name="dob" value="<?php echo $user['dob'];?>" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Telegram Username</label>
                                            <input class="input-bordered" type="text" name="telegram" >
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <h4 class="text-secondary mgt-0-5x">Your Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 1 <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="address1" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 2</label>
                                            <input class="input-bordered" type="text" name="address2">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">City <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="city" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">State <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="state" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label for="nationality" class="input-item-label">Nationality <span class="text-danger">*</span></label>

                                            <select class="select-bordered select-block" name="nationality" id="nationality">
                                            <?php foreach(countries() as $country){
                                             $countryName = $country['name'];
                                             $countryShName = $country['sortname'];
                                             ?>

                                            <option value="<?php echo $countryName;?>" <?php echo ($user['nationality'] =="<?php echo $countryShName;?>") ? "selected":"";?>>
                                            <?php echo $country['name'];?>
                                            </option>  
                  
                                            <?php } ?>
                                            </select>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Zip Code <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text" name="zipcode" required>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step2">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">02</div>
                                    <div class="step-head-text">
                                        <h4>Document Upload</h4>
                                        <p>To verify your identity, please upload any of your document</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="note note-plane note-light-alt note-md pdb-0-5x">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In order to complete, please upload any of the following personal document.</p>
                                </div>
                                <div class="gaps-2x"></div>
                                <ul class="nav nav-tabs nav-tabs-bordered row flex-wrap guttar-20px" role="tablist">
                                    <li class="nav-item flex-grow-0" onclick="$('#documentType').val('passport');">
                                        <a class="nav-link d-flex align-items-center active" data-toggle="tab" href="#passport">
                                            <div class="nav-tabs-icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-passport.png" alt="icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-passport-color.png" alt="icon">
                                            </div>
                                            <span>Passport</span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-grow-0" onclick="$('#documentType').val('national-ID');">
                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="#national-card">
                                            <div class="nav-tabs-icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-national-id.png" alt="icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-national-id-color.png" alt="icon">
                                            </div>
                                            <span>National Card</span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-grow-0" onclick="$('#documentType').val('driver-licence');">
                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="#driver-licence">
                                            <div class="nav-tabs-icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-licence.png" alt="icon">
                                                <img src="<?php echo $baseurl;?>public/images/icon-licence-color.png" alt="icon">
                                            </div>
                                            <span>Driver’s License</span>
                                        </a>
                                    </li>
                                </ul><!-- .nav-tabs-line -->
                                <input type="hidden" name="documentType" id="documentType" value="passport" />
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="passport">
                                        <h5 class="text-secondary font-bold">To avoid delays when verifying account, Please make sure bellow:</h5>
                                        <ul class="list-check">
                                            <li>Chosen credential must not be expaired.</li>
                                            <li>Document should be good condition and clearly visible.</li>
                                            <li>Make sure that there is no light glare on the card.</li>
                                        </ul>
                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload Here Your Passport Copy</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                               <input type="file" name="uploadFilePassport" class="form-control" style="height:45px"/> 
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php echo $baseurl;?>public/images/vector-passport.png" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
                                    <div class="tab-pane fade" id="national-card">
                                        <h5 class="text-secondary font-bold">To avoid delays when verifying account, Please make sure bellow:</h5>
                                        <ul class="list-check">
                                            <li>Chosen credential must not be expaired.</li>
                                            <li>Document should be good condition and clearly visible.</li>
                                            <li>Make sure that there is no light glare on the card.</li>
                                        </ul>
                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload Here Your National id Front Side</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" name="fileUpload[]" class="form-control" style="height:45px"/> 
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php echo $baseurl;?>public/images/vector-id-front.png" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-3x"></div>
                                        <h5 class="font-mid">Upload Here Your National id Back Side</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" name="fileUpload[]" class="form-control" style="height:45px"/> 
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="images/vector-id-back.png" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
                                    <div class="tab-pane fade" id="driver-licence">
                                        <h5 class="text-secondary font-bold">To avoid delays when verifying account, Please make sure bellow:</h5>
                                        <ul class="list-check">
                                            <li>Chosen credential must not be expaired.</li>
                                            <li>Document should be good condition and clearly visible.</li>
                                            <li>Make sure that there is no light glare on the card.</li>
                                        </ul>
                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload Here Your Driving Licence Copy</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" name="uploadFileDrivingLicence" class="form-control" style="height:45px"/> 
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php echo $baseurl;?>public/images/vector-licence.png" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
                                </div><!-- .tab-content -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step3">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">03</div>
                                    <div class="step-head-text">
                                        <h4>Your Paying Wallet</h4>
                                        <p>Submit your wallet address that you are going to send funds</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label for="swalllet" class="input-item-label">Select Wallet </label>
                                            <select class="select-bordered select-block" name="swallet" id="swalllet">
                                                <option value="ETH">Ethereum</option>
                                                <option value="LTC">LTC</option>
                                                <option value="BTC">Bitcoin</option>
                                            </select>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <div class="input-item input-with-label">
                                    <label for="token-address" class="input-item-label">Your Address for tokens:</label>
                                    <input class="input-bordered" type="text" id="token-address" name="token-address" placeholder="Enter your ETH address eg: 0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae" required>
                                    <span class="input-note">Note: Token Address should be ERC20-compliant.</span>
                                </div><!-- .input-item -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step-final">
                            <div class="form-step-fields card-innr">
                                <div class="input-item">
                                    <input class="input-checkbox input-checkbox-md" id="term-condition" type="checkbox">
                                    <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                                </div>
                                <div class="input-item">
                                    <input class="input-checkbox input-checkbox-md" id="info-correct" type="checkbox">
                                    <label for="info-correct">All the personal information I have entered is correct.</label>
                                </div>
                                <div class="gaps-1x"></div>
                                <input type="submit" name="processToVerify" id="processToVerify" class="btn btn-primary" disabled="" value="Process for Verify" />
                            </div><!-- .step-fields -->
                        </div>
                    </div><!-- .card -->
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->
    <?php echo form_close();?>
    