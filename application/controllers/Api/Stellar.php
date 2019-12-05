<?php 
Class Stellar extends ParentController{

    private $env = "TEST";

	function __construct(){
		parent::__construct();
	}

	function endPointUrl(){
      if($this->env == 'TEST'){
         return 'https://horizon-testnet.stellar.org';
      }else{
         return 'https://horizon.stellar.org';
      }
	}

    function createKeyPair(){
      
    }

    function fundAccount(){

    }



}