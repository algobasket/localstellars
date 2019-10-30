<?php 
Class Tokens extends ParentController{
	

	/**
	 * [__construct description]
	 */
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
      $data['token_info'] = token_info();	
      $this->backend('tokens',$data);
    } 


}