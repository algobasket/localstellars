<?php
Class Token extends ParentController{
  
  /**
   * [__construct description]
   */
  function __construct(){
  	parent::__construct();
    $this->load->model('Token_m');
    $this->load->model('Orders_m');
    $this->load->model('Kycs_m');
  } 
  
  /**
   * [buyToken description]
   * @return [type] [description]
   */
  function buyToken()
  {
    $data['contributions'] = $this->Orders_m->getUserContributions($this->getSess('userId'),1);  
    $data['schedule_events'] = $this->Crud->fetch('schedule_events');
    $data['isKycVerified']   = $this->Kycs_m->isKycVerified($this->getSess('userId'));  
   $this->frontend('buy-token',$data);
  }
  
  function buyTokenNow()
  {
    $this->frontend('buy-token-now',[]);
  }



}	