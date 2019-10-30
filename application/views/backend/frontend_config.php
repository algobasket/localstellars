<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php $this->load->view('common/backend-sidebar');?>
                <div class="col-lg-9 main-content">
                   <div class="card content-area">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Frontend Settings</h4>
                                <span class="notify float-right"></span>
                            </div>
                            <div class="card-text">
                                <p>Control All Frontend Page Sections</p>
                            </div>
                            <div class="gaps-1-5x"></div>
                            <table class="data-table dt-init activity-table" data-items="10">
                                
                                <thead>
                                    <tr class="data-item data-head">
                                        <th class="data-col activity-time"><span>Name/Page</span></th>
                                        <th class="data-col activity-device"><span>JSON Data</span></th>
                                        <th class="data-col activity-device"><span>Switch Page</span></th>
                                        <th class="data-col activity-ip"><span></span></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                 
                                  	
                                    <tr class="data-item">
                                        <th class="data-col activity-time">
                                        	<span>
                                        		<?php echo strtoupper($settings['setting_name']);?> 	
                                        	</span>
                                        </th>
                                        <th class="data-col activity-browser">
                                    	<span>
                                    	<textarea class="input-bordered input-textarea json_data"><?php echo $settings['json'];?></textarea>
                                    	</span>
                                        </th>
                                        <td class="data-col activity-browser">
                                        	<span>
                                        		<div class="input-item">
					                                <input type="checkbox" class="input-switch input-switch-sm" id="CheckBox_15" <?php echo ($settings['status'] == 1) ? "checked" : "";?> >
					                                <label for="CheckBox_15">Checked</label>
					                            </div> 
                                        	</span>
                                        </td>
                                        <th class="data-col activity-ip">
                                        	<button type="button" class="btn btn-success btn-sm btn-auto saveSettings">Save Settings</button>
                                        </th>
                                    </tr>
                                  
                                </tbody>

                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>    
            </div>
        </div><!-- .container -->
</div><!-- .page-content -->                