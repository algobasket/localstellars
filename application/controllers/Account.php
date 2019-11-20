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
    $this->load->model('User_m'); 
  }

  function profile() 
  {

    if($this->getSess('userId')){
      $this->load->view('frontend/private_profile');
    }else{ 
      $this->load->view('frontend/public_profile');
    }
  }

  function wallet()
  {
    @$data['info'] = $this->User_m->getUserData($this->getSess('userId')); 
    $this->frontend('wallet-send',[]);
  }

  function wallet_receive()
  {
    $data['info'] = $this->User_m->getUserData($this->getSess('userId')); 
    $this->frontend('wallet-receive',[]);
  }

  function wallet_transactions()
  {
    $this->frontend('wallet-transactions',[]);
  }




}
