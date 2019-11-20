<?php
Class Welcome extends ParentController{

	function __construct()
	{
		parent::__construct();
		$this->lang->load('welcome','english');
		$this->load->model('User_m');
		$this->load->model('Orders_m');
		if(!$this->getSess('userId')){ redirect('/auth/login');}
	}
    
    /**
     * [index description]
     * @return [type] [description]
     */
	function index()
	{   
		$data['contributions'] = $this->Orders_m->getUserContributions($this->getSess('userId'),1);
		$data['orders'] = $this->Orders_m->getAllUserOrders($this->getSess('userId'),null);
		$this->frontend('index',$data);
	}
    
    /**
     * [profile description]
     * @return [type] [description]
     */
	function profile()
	{  
	   $data['info'] = $this->User_m->getUserData($this->getSess('userId'));	 
       $this->frontend('profile',$data);
	}
    
    /**
     * [referral description]
     * @return [type] [description]
     */
	function referral()
	{  
	   $data['referrals'] = $this->User_m->getUserReferalHistory($this->getSess('userId'));
       $this->frontend('referral',$data);
	}
    
    /**
     * [activity description]
     * @return [type] [description]
     */
	function activity()
	{  
	   $data['activityLog'] = $this->User_m->getUserActivityLog($this->getSess('userId')); 
       $this->frontend('activity',$data);
	}

    /**
     * [ico_distribution description]
     * @return [type] [description]
     */
	function ico_distribution()
	{ 
	  $data['contributions'] = $this->Orders_m->getUserContributions($this->getSess('userId'),1);	
	  $data['schedule_events'] = $this->Crud->fetch('schedule_events');	
	  $this->frontend('ico-distribution',$data);
	}

	function all_notifications()
	{
		
	}

	
	
}