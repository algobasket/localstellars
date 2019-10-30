<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal-data">Personal Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#password">Password</a>
                                </li>
                            </ul><!-- .nav-tabs-line -->
                            <div class="tab-content" id="profile-details">
                                <div class="tab-pane fade show active" id="personal-data">
                                    
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="full-name" class="input-item-label">Full Name</label>
                                                    <input class="input-bordered" type="text" id="full-name" name="full-name" value="<?php echo $info['fname'];?>">
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="email-address" class="input-item-label">Email Address</label>
                                                    <input class="input-bordered" type="text" id="email-address" name="email-address" value="<?php echo $info['email'];?>" disabled>
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="mobile-number" class="input-item-label">Mobile Number</label>
                                                    <input class="input-bordered" type="text" id="mobile-number" name="mobile-number" value="<?php echo $info['mobile_number'];?>">
                                                </div><!-- .input-item -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="date-of-birth" class="input-item-label">Date of Birth</label>
                                                    <input class="input-bordered date-picker-dob" type="text" id="date-of-birth" name="date-of-birth" value="<?php echo $info['dob'];?>">
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label for="nationality" class="input-item-label">Nationality</label>
                                                    <select class="select-bordered select-block" name="nationality" id="nationality">
                                                        <option value="us" <?php echo ($info['nationality']=='us') ? "selected" : "";?>>United State</option>
                                                        <option value="uk" <?php echo ($info['nationality']=='uk') ? "selected" : "";?>>United KingDom</option>
                                                        <option value="fr" <?php echo ($info['nationality']=='fr') ? "selected" : "";?>>France</option>
                                                        <option value="ch" <?php echo ($info['nationality']=='ch') ? "selected" : "";?>>China</option>
                                                        <option value="cr" <?php echo ($info['nationality']=='cr') ? "selected" : "";?>>Czech Republic</option>
                                                        <option value="cb" <?php echo ($info['nationality']=='cb') ? "selected" : "";?>>Colombia</option>
                                                    </select>
                                                </div><!-- .input-item -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="gaps-1x"></div><!-- 10px gap -->
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-primary updateProfile">Update Profile</button>
                                            <div class="gaps-2x d-sm-none"></div>
                                            <span class="text-success updatePersonalDataSuccess" style="display: none"><em class="ti ti-check-box"></em> All Changes are saved</span>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .tab-pane -->
                                <?php 
                                $settings = json_decode($info['settings'],true);
                                $save_log = ($settings['save_log'] == 1) ? "checked" : "";
                                $pass_change_confirm = ($settings['pass_change_confirm'] == 1) ? "checked" : "";
                                $latest_news = ($settings['latest_news'] == 1) ? "checked" : "";
                                $activity_alert = ($settings['activity_alert'] == 1) ? "checked" : "";
                                ?>
                                <div class="tab-pane fade" id="settings">
                                    <div class="pdb-1-5x">
                                        <h5 class="card-title card-title-sm text-dark">Security Settings</h5>    
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="save-log" <?php echo $save_log;?>>
                                        <label for="save-log">Save my Activities Log</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="pass-change-confirm" <?php echo $pass_change_confirm;?>>
                                        <label for="pass-change-confirm">Confirm me through email before password change</label>
                                    </div>
                                    <div class="pdb-1-5x">
                                        <h5 class="card-title card-title-sm text-dark">Manage Notification</h5>    
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="latest-news" <?php echo $latest_news;?>>
                                        <label for="latest-news">Notify me by email about sales and latest news</label>
                                    </div>
                                    <div class="input-item">
                                        <input type="checkbox" class="input-switch input-switch-sm" id="activity-alert" <?php echo $activity_alert;?>>
                                        <label for="activity-alert">Alert me by email for unusual activity.</label>
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-primary updateSettings">Update Settings</button>
                                        <span></span>
                                        <span class="text-success updateSettingsSuccess" style="display: none"><em class="ti ti-check-box"></em> Setting has been updated</span>
                                    </div>
                                </div><!-- .tab-pane -->

                                <div class="tab-pane fade" id="password">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label oldPasswordLabel">
                                                <label for="old-pass" class="input-item-label">Old Password</label>
                                                <input class="input-bordered" type="password" id="old-pass" name="old-pass">
                                               
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="new-pass" class="input-item-label">New Password</label>
                                                <input class="input-bordered" type="password" id="new-pass" name="new-pass">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="input-item input-with-label">
                                                <label for="confirm-pass" class="input-item-label">Confirm New Password</label>
                                                <input class="input-bordered" type="password" id="confirm-pass" name="confirm-pass">
                                            </div><!-- .input-item -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="note note-plane note-info pdb-1x passwordMatchOldNew">
                                        <em class="fas fa-info-circle"></em>
                                        <p>Password should be minmum 8 letter and include lower and uppercase letter.</p>
                                    </div>
                                    <div class="gaps-1x"></div><!-- 10px gap -->
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        
                                        <button type="button" class="btn btn-primary updatePassword">Update</button>
                                        <div class="gaps-2x d-sm-none"></div>
                                        <span id="updatePasswordError"></span>
                                        <span class="text-success updatePasswordSuccess" style="display: none"><em class="ti ti-check-box"></em>  Changed Password</span>
                                    </div>
                                </div><!-- .tab-pane -->
                            </div><!-- .tab-content -->
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                