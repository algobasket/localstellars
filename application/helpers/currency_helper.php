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


if(!function_exists('currencies'))
{
     function currencies()
     {
        $ci = get_instance();
        $ci->load->model('Crud');
        $data = $ci->Crud->fetchAllWhere('currencies',['status' => 1]);
        return $data;
     }
} 
	

if(!function_exists('getCoinMarketCapData'))
{
     function getCoinMarketCapData() 
     {  
        $json  = file_get_contents("https://coinmarketrise.com/index.php/Crawl/getCoinMarketCapDataJson");
        $array = json_decode($json,true);
        foreach($array as $r)
        {
           if($r['coinSymbol'] == 'BTC' || $r['coinSymbol'] == 'ETH' || $r['coinSymbol'] == 'LTC')
           {
             $data[] = array(
             	   'currency_symbol' => $r['coinSymbol'],
             	   'currency_name'   => $r['coinName'],
             	   'currency_type'   => 'coin',
             	   'price'           => round(str_replace('$','',$r['price']),2),
             	   'created'         => date('d-m-Y h:i:s'),
             	   'updated'         => date('d-m-Y h:i:s'),
             	   'status'          => 1
             	);
           }   
        }
        return $data;
     }
}



