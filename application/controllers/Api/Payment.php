<?php
Class Payment extends ParentController{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Token_m');
	}  

	function directCrypto()
	{
		$amount_usd = round($this->input->post('amount') * currencyPrice($this->input->post('currency')),2);
        $address_to = payment_wallet()[$this->input->post('currency')];
        $order_number = str_shuffle(strtoupper(time().rand(1,99999).uniqid()));
            $orderData = [
              'order_number'        => $order_number,
              'order_type'          => 'purchase',
              'buy_currency_id'     => 4,
              'buy_currency_amount' => $this->input->post('token'),
              'payment_method'      => 'direct_crypto',
              'amount'              => $this->input->post('amount'),
              'amount_type'         => $this->input->post('currency'),
              'amount_usd'          => $amount_usd,
              'user_id'   => $this->getSess('userId'),
              'created'   => date('d-m-Y h:i:s'),
              'updated'   => date('d-m-Y h:i:s'),
              'status'    => 4
          ];
          $savePaymentData = [
               'user_id'        => $this->getSess('userId'),
               'order_number'   => $orderData['order_number'],
               'method'         => 'direct_crypto',
               'transaction_id' => '', 
               'created'        => date('d-m-Y h:i:s'),
               'updated'        => date('d-m-Y h:i:s'),
               'status'         => 4,
               'address_from'   => '',
               'address_to'     => $address_to,
               'amount'         => $orderData['amount']
             ];  
             //print_r($orderData);exit;  
            $this->Crud->create('order',$orderData);
            $this->Crud->create('payment',$savePaymentData);
            echo $orderData['order_number'];   
	} 

    function confirmTransactionId()
    {   
       $order_number = trim($this->input->post('order_number')); 	
       $data = [
          'address_from'   => trim($this->input->post('address_from')), 
          'transaction_id' => trim($this->input->post('transaction_id')), 
       ];   
       $this->Crud->update('payment',['order_number' => $order_number],$data);
       echo 1;
    } 

	// function directCryptoAddressToUpdate($currency,$transactionId)
	// {
 //        $link = 'https://api.blockcypher.com/v1/'.
 //                        strtolower($this->input->post('currency')).
 //                        '/main/addrs/'.$address_to;    

 //        $json =  $this->httpGet($link);
	// 	$array = json_decode($json,true); 	
	//    if(is_array($array))
	//    {   
	//        foreach($array['txrefs'] as $t)
	//       {
 //             if(($t['tx_hash'] == $providedHash) && ($t['confirmations'] > 0))
 //             {  
 //             	$cryptoAmount = $t['value']/1000000000000000000;
                
 //             }
	//       }
	//    }     
	// }



	// function directCryptoTransactionIdUpdate($currency,$transactionId)
	// {
 //        $link = 'https://api.blockcypher.com/v1/'.
 //                        strtolower($this->input->post('currency')).
 //                        '/main/addrs/'.$address_to;    

 //        $json =  $this->httpGet($link);
	// 	$array = json_decode($json,true); 	
	//    if(is_array($array))
	//    {   
	//        foreach($array['txrefs'] as $t)
	//       {
 //             if(($t['tx_hash'] == $providedHash) && ($t['confirmations'] > 0))
 //             {  
 //             	$cryptoAmount = $t['value']/1000000000000000000;
                
 //             }
	//       }
	//    }     
	// }

	// function createUniqueOrderId()
	// {
 //      echo str_shuffle(strtoupper(time().rand(1,99999).uniqid()));
	// }

	function httpGet($url)
    {
        $ch = curl_init();  
	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	   //curl_setopt($ch,CURLOPT_HEADER, false); 
	    $output=curl_exec($ch);
	    curl_close($ch);
	    return $output;
    }   

}
?>	
