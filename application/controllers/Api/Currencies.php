<?php 
Class Currencies extends ParentController{
    
    /**
     * [__construct description]
     */
	function __construct()
	{
	   parent::__construct();
	}
    
    /**
     * [getAllCurrencies description]
     * @return [type] [description]
     */
    function getAllCurrencies()
    {
       echo json_encode($this->Crud->fetch('currencies'),true);
    }
    
    /**
     * [calculatePrice description]
     * @return [type] [description]
     */
    function calculateTokenPrice()
    { 
       if($this->input->post('api') == true)
       {	
         $coinSymbol = $this->input->post('coinSymbol');  
         $tokenBaseAmount = $this->input->post('tokenBaseAmount');
         echo round($tokenBaseAmount * currencyPrice($coinSymbol)/currencyPrice('XXA'),2);
       }
    }




}     	