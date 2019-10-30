<?php 
Class Sales extends ParentController{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Orders_m');
	}
    
    function index()
    { 
      $data['section'] = 'list';	
      $this->backend('sales',$data);
    }

	function history() 
	{
	  $data['getAllOrders'] = $this->Orders_m->getAllOrders(null);	
	  $data['section'] = 'history';	
      $this->backend('sales',$data);
	}

}
