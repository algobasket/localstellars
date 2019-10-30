<?php 
Class Settings extends ParentController{


	function __construct()
	{
		parent::__construct();
	}
    
    function frontend_page()
    {   
    	$this->Crud->update('settings',['setting_name'=>$this->input->post('setting_name')],[
           'json'   => $this->input->post('json'),
           'status' => $this->input->post('status')
    	]);
    	return true;
    }

}
