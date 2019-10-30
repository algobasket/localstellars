<?php 
Class Welcome extends ParentController{
	
	function __construct()
	{
	  parent::__construct();
	  $this->load->model('User_m');	
	}
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	function index()
	{ 
	  $json = $this->Crud->fetchOneWhere('settings',['setting_name'=>'token_info']);
	  $data['token_info'] = json_decode($json['json'],true);
      
      $total_customer   = $this->User_m->totalUsersByStatus(NULL);
      $total_blocked    = $this->User_m->totalUsersByStatus(9);
      $total_suspended  = $this->User_m->totalUsersByStatus(3);
      $total_activated  = $this->User_m->totalUsersByStatus(1);

	  $data['user_card'] = array(
        'total_customer'  => $total_customer,
        'total_blocked'   => $total_blocked,
        'total_suspended' => $total_suspended,
        'total_activated' => $total_activated
	  );	
      $this->backend('welcome',$data);
	}


	function profile()
	{
	   $data['info'] = $this->User_m->getUserData($this->getSess('userId'));	
       $this->backend('profile',$data);
	}

	function activity()
	{
	  $data['activityLog'] = $this->User_m->getUserActivityLog($this->getSess('userId')); 	
      $this->backend('activity',$data);
	}
    
}