<?php
Class Transaction extends ParentController{
   
   /**
    * [__construct description]
    */
  function __construct()
  {
    parent::__construct();
    $this->load->model('Orders_m');
  }

  
  function userTransactions()
  {   
      $data['transactions'] = $this->Orders_m->userTransactions($this->getSess('userId'));
      $this->frontend('transactions',$data); 	
  }





}