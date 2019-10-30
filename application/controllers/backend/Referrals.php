<?php 
Class Referrals extends ParentController{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Orders_m');
	}

	function index()
	{  
		$data['referrals'] = $this->User_m->getAllReferral(null);
		$data['section'] = 'list';
	    $this->backend('referrals',$data); 	
	}



}
