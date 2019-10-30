<?php
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

Class Payment extends ParentController{
   

   protected $paypalClientId     = 'AbkBViu7fuTuTZQDmWE1vknAkBJXjc4Y0lcjqZV1S3Ts4irmBAqLvEz6g5rv4QhdBEMcoYYu4E4baDY7';
   protected $paypalClientSecret = 'ECOwrqOnOaFvKlT4NXONrSwdDwgyvgVhoddRr8S7J4r2kunfjGBYWE1ya8yGgloy4ajeneSAZ96R4C-y';


   /**
    * [__construct description]
    */
  function __construct()
  {
    parent::__construct();
  }

  /**
   * [paypal description]
   * @return [type] [description]
   */
  function paypal()
  {
	   	require APPPATH . 'libraries/Checkout-PHP-SDK/vendor/autoload.php';

      $clientId     = $this->paypalClientId;
      $clientSecret = $this->paypalClientSecret;

      $environment = new SandBoxEnvironment($clientId, $clientSecret);
      $client      = new PayPalHttpClient($environment);
     
      $request = new OrdersCreateRequest();
      $request->prefer('return=representation');
      $amount_usd = round($this->input->get('amount') * currencyPrice($this->input->get('currency')),2);
      
      //1_LTC_UserID_Token 
      $reference_id = $this->input->get('amount') .
                      '_'.$this->input->get('cs').
                      '_'.$this->getSess('userId').
                      '_'.$this->input->get('token');


      $request->body = [
                           "intent" => "CAPTURE",
                           "purchase_units" => [[ 
                               "reference_id" => $reference_id,
                               "amount" => [
                                   "value" => $amount_usd,
                                   "currency_code" => "USD"
                               ]
                           ]],
                           "application_context" => [
                                "cancel_url" => base_url() . "Payment/paypalCancel",
                                "return_url" => base_url() . "Payment/paypalReturn"
                           ] 
                       ];

      try {
          // Call API with your client and get a response for your call
          $response = $client->execute($request);
          
          // If call returns body in response, you can get the deserialized version from the result attribute of the response
          $array = (array)$response;
          $array = (array)$array['result'];


          
          $paypalOrderId = $array['id'];



          $this->setSess(['paypalOrderId' => $paypalOrderId]);
          
          $this->setSess([
            'orderData' => [
              'order_number'        => $paypalOrderId,
              'order_type'          => 'purchase',
              'buy_currency_id'     => 4,
              'buy_currency_amount' => $this->input->get('token'),
              'payment_method'      => 'paypal',
              'amount'              => $this->input->get('amount'),
              'amount_type'         => $this->input->get('currency'),
              'amount_usd'          => $amount_usd
          ]
      ]);
           
          $array = (array)$array['links'];
          $array = (array)$array[1];
          redirect($array['href']);
      }catch (HttpException $ex) {
          echo $ex->statusCode;
          print_r($ex->getMessage());
      }
  }
  
  
  /**
   * [paypalReturn description]
   * @return [type] [description]
   */
  function paypalReturn()
  {
     require APPPATH . 'libraries/Checkout-PHP-SDK/vendor/autoload.php';
      
      $clientId     = $this->paypalClientId;
      $clientSecret = $this->paypalClientSecret;

      $environment = new SandBoxEnvironment($clientId, $clientSecret);
      $client      = new PayPalHttpClient($environment);

      //$request = new OrdersCaptureRequest("APPROVED-ORDER-ID");
      $request = new OrdersCaptureRequest($this->getSess('paypalOrderId'));
      $request->prefer('return=representation');
      try {
          // Call API with your client and get a response for your call
          $response = $client->execute($request);
          
          // If call returns body in response, you can get the deserialized version from the result attribute of the response
          if($response->result->status == 'COMPLETED')
          {  
             //print_r($response->result);exit;
             $orderData = $this->getSess('orderData');
             
             $orderData2 = [
              'user_id'   => $this->getSess('userId'),
              'created'   => date('d-m-Y h:i:s'),
              'updated'   => date('d-m-Y h:i:s'),
              'status'    => 4
             ];

             $savePaymentData = [
               'user_id'        => $this->getSess('userId'),
               'order_number'   => $orderData['order_number'],
               'method'         => 'paypal',
               'transaction_id' => 'TNX-'.strtoupper(uniqid()),
               'created'        => date('d-m-Y h:i:s'),
               'updated'        => date('d-m-Y h:i:s'),
               'status'         => 1
             ];

             $this->Crud->create('payment',$savePaymentData);
              
             $saveOrder = array_merge($orderData,$orderData2);
             if($this->Crud->create('order',$saveOrder))
             {
               $this->setFlash('<div class="alert alert-success">Payment Successful</div>');
               redirect('transactions');
             }
          }
      }catch (HttpException $ex) {
          echo $ex->statusCode;
          print_r($ex->getMessage());
      }
  }
  
  /**
   * [paypalCancel description]
   * @return [type] [description]
   */
  function paypalCancel()
  {
     require APPPATH . 'libraries/Checkout-PHP-SDK/vendor/autoload.php';
      
      $clientId     = $this->paypalClientId;
      $clientSecret = $this->paypalClientSecret;

      $environment = new SandBoxEnvironment($clientId, $clientSecret);
      $client      = new PayPalHttpClient($environment);
  }

   /**
   * [DirectCrypto description]
   * @return [type] [description]
   */
  
  function directCrypto()    
  {  
     $amount_usd = round($this->input->get('amount') * currencyPrice($this->input->get('currency')),2);
     $order_number = str_shuffle(strtoupper(time().rand(1,99999).uniqid()));
            $orderData = [
              'order_number'        =>  $order_number,
              'order_type'          => 'purchase',
              'buy_currency_id'     => 4,
              'buy_currency_amount' => $this->input->get('token'),
              'payment_method'      => 'direct_crypto',
              'amount'              => $this->input->get('amount'),
              'amount_type'         => $this->input->get('currency'),
              'amount_usd'          => $amount_usd
          ];

  
             print_r($orderData);exit; 
             
             $orderData2 = [
              'user_id'   => $this->getSess('userId'),
              'created'   => date('d-m-Y h:i:s'),
              'updated'   => date('d-m-Y h:i:s'),
              'status'    => 4
             ];

             $savePaymentData = [
               'user_id'        => $this->getSess('userId'),
               'order_number'   => $orderData['order_number'],
               'method'         => 'direct_crypto',
               'transaction_id' => 'TNX-'.strtoupper(uniqid()), 
               'created'        => date('d-m-Y h:i:s'),
               'updated'        => date('d-m-Y h:i:s'),
               'status'         => 1 
             ];

             $this->Crud->create('payment',$savePaymentData);
              
             $saveOrder = array_merge($orderData,$orderData2);
             if($this->Crud->create('order',$saveOrder))
             {
               $this->setFlash('<div class="alert alert-success">Payment Successful</div>');
               redirect('transactions');
             }
          
  }
  


  /**
   * [coingate description]
   * @return [type] [description]
   */
  function coingate()
  {

  }

  
  /**
   * [coinpayment description]
   * @return [type] [description]
   */
  function coinpayment()
  {

  }

  






}