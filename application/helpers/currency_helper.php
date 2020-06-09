<?php
//All prices in Standard USD
if(!function_exists('currencyPrice'))
{
     function currencyPrice($currency)
     {
        $ci = get_instance();
        $ci->load->model('Crud');
        $data = $ci->Crud->fetchOneWhere('currencies',['currency_symbol' => $currency]);
        return $data['price'];
     }
}

/**
 * - @currencies
 */
if(!function_exists('currencies'))
{
     function currencies($type = NULL)
     {
        $ci = get_instance();
        $ci->load->model('Crud');
        if($type == 'coin'){
          $data = $ci->Crud->fetchAllWhere('currencies',['status' => 1,'currency_type' => 'coin']);
        }elseif($type == 'fiat'){
          $data = $ci->Crud->fetchAllWhere('currencies',['status' => 1,'currency_type' => 'fiat']);
        }else{
          $data = $ci->Crud->fetchAllWhere('currencies',['status' => 1]);
        }
        return $data;
     }
}

/**
 * - @getCoinMarketCapData
 */
if(!function_exists('getCoinMarketCapData'))
{
     function getCoinMarketCapData()
     {
        $json  = file_get_contents("https://coinmarketrise.com/index.php/Crawl/getCoinMarketCapDataJson");
        $array = json_decode($json,true);
        foreach($array as $r)
        {
           if(in_array($r['coinSymbol'],['BTC','ETH','LTC','XLM','XLMG']))
           {
             $data[] = array(
             	   'currency_symbol' => $r['coinSymbol'],
             	   'currency_name'   => $r['coinName'],
             	   'currency_type'   => 'coin',
             	   'price'           => str_replace('$','',$r['price']),
             	   'created'         => date('d-m-Y h:i:s'),
             	   'updated'         => date('d-m-Y h:i:s'),
             	   'status'          => 1
             	);
           }
        }
        return $data;
     }
} 

/**
 *  Current Base Currency
 */
if(!function_exists('currentBaseCurrency')) 
{
   function currentBaseCurrency() 
   {  
       $ci = get_instance();
      if($ci->session->userdata('currentBaseCurrency'))
      { 
        return $ci->session->userdata('currentBaseCurrency');
      }else{   
        return lang('common_basecurrency');   
      }       
   }
}

/**
 *  Current Base Currency Name
 */
if(!function_exists('currentBaseCurrencyName')) 
{
   function currentBaseCurrencyName() 
   {  
       $ci = get_instance();   
      if($ci->session->userdata('currentBaseCurrencyName'))
      { 
        return $ci->session->userdata('currentBaseCurrencyName');
      }else{   
        return lang('common_basecurrency');   
      }       
   }
}

/**
 *  Current Base Currency
 */
if(!function_exists('currentBaseCurrencyDetail')) 
{
   function currentBaseCurrencyDetail()
   {   
       $ci = get_instance();
      if($ci->session->userdata('currentBaseCurrency'))
      { 
        $coin =  $ci->session->userdata('currentBaseCurrency');
      }else{   
        $coin =  lang('common_basecurrency');   
      }
      return $ci->Crud->fetchOneWhere('currencies',['status' => 1,'is_base' => 1,'currency_symbol' => $coin]);                      
   } 
}    

/**
 *  Current Fiat Base Currency 
 */
if(!function_exists('currentFiatBaseCurrency'))  
{
  function currentFiatBaseCurrency()
  {
    $ci = get_instance();
      if($ci->session->userdata('currentBaseFiatCurrency'))
      { 
        return $ci->session->userdata('currentBaseFiatCurrency');
      }else{   
        return lang('common_fiatbasecurrency');    
      }       
  }
}
 
/**
 * Base Currencies
 */
if(!function_exists('baseCurrencies'))
{
   function baseCurrencies() 
   {
     $ci = get_instance();
     $ci->load->model('Crud');
     return $ci->Crud->fetchAllWhere('currencies',['status' => 1,'is_base' => 1]);
   }
} 


