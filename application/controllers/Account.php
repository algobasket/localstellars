<?php
Class Account extends ParentController{

  /**
   * [__construct description]
   */
  function __construct()
  {
  	parent::__construct();
  	$this->out = $this->Site_m->isSiteUnderMaintainance();
	$this->deviceInfo = $this->getDeviceInfo(); 
  }

  function profile() 
  {

    if($this->getSess('userId')){
      $this->load->view('frontend/private_profile');
    }else{ 
      $this->load->view('frontend/public_profile');
    }
  }




}
