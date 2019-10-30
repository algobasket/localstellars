<?php 
Class Cron extends ParentController{

  /**
   * [__construct description]
   */
	function __construct()
	{
		parent::__construct();
    $this->load->model('Token_m');
	}

  /**
   * [upsertCurrency description]
   * @return [type] [description]
   */
    function upsertCurrency()
    {   
    	$data = getCoinMarketCapData();
    	if(is_array($data)){
            foreach($data as $r)
	    	{
	          $query = $this->db->where(['currency_symbol' => $r['currency_symbol']])
	                        ->get('currencies');
	          if($query->num_rows() == 1)
	          {
	             $this->Crud->update('currencies',['currency_symbol' => $r['currency_symbol']],$r);
	          }else{
	          	 $this->Crud->create('currencies',$r);
	          }
	    	}
	      echo "Price Updated";
    	}else{
          echo "Something Went Wrong!";
    	}	
    }
    

    /**
     * [upsertXXA description]
     * @return [type] [description]
     */
    function upsertXXA()
    {
    	$price = 3.548;
    	$r = array(
         'currency_symbol' => 'XXA',
         'currency_name'   => 'Ixinium',
         'currency_type'   => 'token',
         'price'           => $price,
         'created'         => date('d-m-Y h:i:s'),
         'updated'         => date('d-m-Y h:i:s'),
         'status'          => 1
    	);
    	$query = $this->db->where(['currency_symbol' => 'XXA'])
	                        ->get('currencies');
          if($query->num_rows() == 1)
          {  
          	 unset($r['created']);
             $this->Crud->update('currencies',['currency_symbol' => 'XXA'],$r);
          }else{
          	 $this->Crud->create('currencies',$r);
          }
         echo "Token Updated";
    }


    /**
     * [totalTokenOfAllusers description]
     * @return [type] [description]
     */
    function totalTokenOfAllusers()
    {
      $totalToken = $this->Token_m->totalTokenOfAllusers();
      $query = json_decode($this->Crud->fetchOneWhere('settings',['setting_name' => 'token_info'])['json'],true);
      $total_circulating_supply =  $query['total_circulating_supply'];

      $json = json_encode(array(
        'total_circulating_supply' => $total_circulating_supply,
        'volume_token'             => $totalToken,
        'remaining_token'          => $total_circulating_supply-$totalToken
      ),true);   
      $this->Crud->update('settings',['setting_name'=>'token_info'],['json'=>$json]);
      echo "Total Token Updated";
    }



}	