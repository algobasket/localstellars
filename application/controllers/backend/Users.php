<?php 
Class Users extends ParentController{
	
	function __construct()
	{
		parent::__construct();
    $this->load->model('User_m');
		$this->load->model('Orders_m');
	}
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	function index()
	{ 
		$data['getAllUsers'] = $this->User_m->getAllUsers(null);
        $this->backend('user-list',$data);
	}
    
    /**
     * [listExpand description]
     * @return [type] [description]
     */
    function expand()
    {
      $data['getAllUsers'] = $this->User_m->getAllUsers(null);
      $this->backend('user-list-expand',$data);
    }
    
    /**
     * [view_details description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function view_details($id)
    {  
       $data['contributions'] = $this->Orders_m->getUserContributions($id,1);
       $data['getUserData'] = $this->User_m->getUserData($id);
       $data['getLastLogin'] = $this->User_m->getLastLogin($id);									
       $this->backend('user-details',$data);
    } 
     
     /**
      * [activate description]
      * @param  [type] $id [description]
      * @return [type]     [description]
      */
    function activate($id)
    {
      $this->User_m->activateUser($id);
       redirect('backend/users');
    }
     
    /**
     * [suspend description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function suspend($id)
    {
       $this->User_m->suspendUser($id);
       redirect('backend/users');
    }
    
    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function delete($id)
    {
       $this->User_m->delUser($id);
       redirect('backend/users');
    }

    

    
}