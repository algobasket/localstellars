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
       return $this->Crud->fetchAllWhere('currencies',['status' => 1]);
  }

}	

