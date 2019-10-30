<?php 
Class Settings extends ParentController{
    
  /**
   * [__construct description]
   */
	function __construct()
	{
		parent::__construct();
	}
    
    /**
     * [maintainance_config description]
     * @return [type] [description]
     */
	function maintainance_config()
	{   
       $data['list'] = $this->Crud->fetchAllWhere(
       	                  'settings',
       	                 ['setting_name' => 'maintainance']
       	             );
	   $this->backend('maintainance',$data);
	}
    
    /**
     * [backend_config description]
     * @param  [type] $module [description]
     * @return [type]         [description]
     */
	function backend_config($module="")
	{
       if($module == "transaction-fees")
       {  
       	  if($this->input->post('save'))
       	  { 
       	  	$json = $this->input->post('json');
            $this->Crud->upsert('settings',['setting_name' => 'transaction_fees'],['json' => $json]);
            redirect('backend/settings/backend_config/transaction-fees');
       	  }
       	 $data['transaction_fees'] = $this->Crud->fetchAllWhere('settings',['setting_name'=>'transaction_fees']); 
       	 
       	 $data['json']   = $this->Crud->fetchAllWhere('settings',['setting_name'=>'transaction_fees'])[0]['json'];
       	 $data['module'] = $module;
       	 $this->backend('settings',$data); 
       }elseif($module == "currencies"){

       }else{
       	$data['module'] = 'settings-list';
       	$this->backend('settings',$data);
       }
	}


  /**
   * [frontend_config description]
   * @param  string $module [description]
   * @return [type]         [description]
   */
  function frontend_config($module = "")
  {   
      $settings = $this->Crud->fetchOneWhere('settings',['setting_name' => 'page_block']);
      $data['settings'] = $settings;
      $this->backend('frontend_config',$data);
  }


  /**
   * [exchange_ratings description]
   * @return [type] [description]
   */
	function exchange_ratings()
	{
		 $data['module'] = __FUNCTION__;
     $this->backend('settings',$data);
	}


  function payment_config()
  {  
    if($this->input->post('save'))
    {
      $json = $this->input->post('json_data');
      $this->Crud->update('settings',['setting_name' => 'payment_wallet'],['json' => $json]);
      redirect('backend/settings/payment_config');
    }
     $data['payment'] = $this->Crud->fetchOneWhere('settings',['setting_name' => 'payment_wallet']);
     $this->backend('payment_config',$data);
  }
    
    /**
     * [create description]
     * @return [type] [description]
     */
	function create()
	{
	  if($this->input->post('submit'))
	  {  
	  	 $array = [
            'setting_name' => 'maintainance',
            'access'       => 1,
            'json'         => json_encode([
              'title'   => $this->input->post('titleM'),
              'message' => $this->input->post('messageM')
            ],true),
            'created' => date('d-m-Y h:i:s'),
            'updated' => date('d-m-Y h:i:s'),
            'status'  => 2
         ];
         $this->Crud->create('settings',$array);
         redirect('backend/settings/maintainance_config');
	  }	
	}
    
    /**
     * [activate description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
	function activate($id)
	{ 
	  $this->Crud->update('settings',['setting_name' => 'maintainance'],['status' => 2]);	
      $this->Crud->update('settings',['id' => $id],['status' => 1]);
      redirect('backend/settings/maintainance_config');
	}
    

    /**
     * [deactivate description]
     * @return [type] [description]
     */
	function deactivate($id)
	{ 
	  $this->Crud->update('settings',['setting_name' => 'maintainance'],['status' => 2]);	
      //$this->Crud->update('settings',['id' => $id],['status' => 2]);
      redirect('backend/settings/maintainance_config');
	}


}