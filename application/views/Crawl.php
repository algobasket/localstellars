<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crawl extends CI_Controller{
  

    protected $CoinMarketCapUrl = "https://coinmarketcap.com/all/views/all/";
    


    function __construct(){
	   parent::__construct();
	   $this->pageIdentity = [
		   'title' => 'Coin Market Rise',
		   'site'  => 'CoinMarketRise'
	   ];
	} 

	public function getCoinMarketCapData()
	{   
   
		$html = $this->curl_get_contents($this->CoinMarketCapUrl);
		$html = $this->scrapKit($html,'id="currencies-all" style="font-size:14px">','</table>');
		$explode = explode('</tr>',$html);
		foreach($explode as $each)
    {
            $string = $this->scrapKit($each,'<span class="currency-symbol visible-xs">','<br class="visible-xs">');
            if(trim(strip_tags($string))){
                
                // Coin Symbol
               $coinSymbol =  trim(strip_tags($string));
               $data['coinSymbol'] = $coinSymbol;
            }
            $string2 = $this->scrapKit($each,'<br class="visible-xs">','<td class="text-left col-symbol">');
            if(trim(strip_tags($string2))){
            	
            	//Coin name 
               $coinName =  trim(strip_tags($string2));
               $data['coinName'] = $coinName;
            }
             $string3 = $this->scrapKit($each,'<td class="no-wrap market-cap text-right"','<td class="no-wrap text-right" data-sort');
            if(trim(strip_tags($string3))){
               $string3 =  trim(strip_tags($string3));
               $string3 = explode('>',$string3);

                 // Market Cap in USD
               $marketCapInUSD = $string3[1];
               $data['marketCapInUSD'] = trim($marketCapInUSD);

               $marketCapArray = explode('=',$string3[0]);
               
               // Market Cap in BTC
               $marketCapInBTC = str_replace('"','',str_replace('" data-sort','',$marketCapArray[2]));
               $marketCapInBTC = (float)$marketCapInBTC;
               $data['marketCapInBTC'] = number_format($marketCapInBTC); 
            }
             
             $string4 = $this->scrapKit($each,'class="price"','<td class="no-wrap text-right circulating-supply');
             $string4 = $this->scrapKit($string4,'data-usd="','" data-btc="');
            if(trim(strip_tags($string4))){
            	
            	//Price 
               $price =  trim(str_replace('">','',strip_tags($string4)));
               $data['price'] = '$'.round($price,5);
            }

            $string5 = $this->scrapKit($each,'data-supply="','" data-supply-container>');
            
            if(trim(strip_tags($string5))){
            	
            	//Circulating Supply 
               $supply =  (float)trim(strip_tags($string5));
               $data['supply'] = number_format($supply); 
            }

            $string6 = $this->scrapKit($each,'class="volume"','data-timespan="1h"');
            $string6 = $this->scrapKit($string6,'data-usd="','" data-btc="');
            
            if(trim(strip_tags($string6))){
            	
            	//Volume 
               $volume =  trim(strip_tags($string6));
               $data['volume'] =  ($volume != "None") ? '$' . number_format($volume) : $volume;
            }

            $string7 = $this->scrapKit($each,'data-timespan="1h"','data-timespan="24h"');
            $string7 = $this->scrapKit($string7,'data-percentusd="','" data-symbol="');
            
            if(trim(strip_tags($string7))){
            	
            	//One Hour 
               $OneHOur =  trim(strip_tags($string7));
               $data['OneHour'] = $OneHOur; 
            }

            $string8 = $this->scrapKit($each,'data-timespan="24h"','data-timespan="7d"');
            $string8 = $this->scrapKit($string8,'data-percentusd="','" data-symbol="');
            
            if(trim(strip_tags($string8))){
            	
            	//24Hour
               $twentyFOurHOur =  trim(strip_tags($string8));
               $data['twentyFourHour'] = $twentyFOurHOur; 
            }

            $string9 = $this->scrapKit($each,'data-timespan="7d"','<td class="more-options-cell');
            $string9 = $this->scrapKit($string9,'data-percentusd="','" data-symbol="');
            
            if(trim(strip_tags($string9))){
            	
            	//7 Days 
               $sevenDay =  trim(strip_tags($string9));
               $data['sevenDay'] = $sevenDay; 
            }
            
            if(@$_GET['image'] == 1){
            $string10 = $this->scrapKit($each,'<a class="link-secondary"','<br class="visible-xs">');
            $string10 = $this->scrapKit($string10,'href="','">');
            if(trim(strip_tags($string10))){
            	
            	//Link 
               $linkCurrency =  trim(strip_tags($string10));
               $data['linkCurrency'] = "https://coinmarketcap.com".$linkCurrency;
          
               $data['image'] = $this->getCoinMarketCapDataImg($data['linkCurrency']);
            }
        }
        if(isset($data))
        {
          $array[] = $data;
        }
       
		 } // ENDFOREACH
    return $array;
	}

  public function getCoinMarketCapDataArray()
  { 
      print_r($this->getCoinMarketCapData());
  }


  public function getCoinMarketCapDataHtml()
  { 
    $data = $this->getCoinMarketCapDataJson();
    
    echo '<pre>';
    if(isset($data))
    {
      echo $data;
    }
    echo '</pre>';

  }


  public function getCoinMarketCapDataJson()
  {  
    $data = json_encode($this->getCoinMarketCapData(),true);
    if(isset($data))
    {
      echo $data;
    }
  }
    

	private function getCoinMarketCapDataImg($link){
        $html = $this->curl_get_contents($link);
        $string = $this->scrapKit($html,'<h1 class="details-panel-item--name">','" class="logo-32x32"');
        $string = str_replace('<img src="','',$string);
        return $string;
	}


	private function scrapKit($inputstring,$start,$end)
	{
       return  $this->extract_section($inputstring,$start,$end,"","",0,"",0,0,0,0,0);
	}


	private function curl_get_contents($url)
    {
		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
     }


	 private function extract_section($inputstring,$start,$end,$includestart,$includeend,$returnarray=0,$separator = "",$leave_start_elements = 0,$leave_end_elements = 0,$striphtml = 0,$search_arr = 0,$replace_arr = 0)
     {
       // ---------------- extract_section v 2.0 -------------------- // 
   
	   $final_result_arr = array();    
	if($returnarray == 1) 
	{      
		$result_arr = explode(($separator)? $result : $start.$result, $inputstring);
		//print_r($result_arr);
		foreach($result_arr as $result)
		{
			
			$temp = extract_section(($separator)? $result : $start.$result, $start, $end,$includestart,$includeend,0,"", 0, 0, $striphtml, $search_arr, $replace_arr);
			
			//echo "$result<br>***************<br>$temp"; break;
			
			array_push($final_result_arr, $temp);
			
		}
		$arr_count = count($final_result_arr);
		//print_r($final_result_arr);
		if($leave_start_elements>0  || $leave_end_elements>0)
		{
		if(($leave_end_elements > $arr_count) || ($leave_start_elements > $arr_count)) 
			{  return $final_result_arr;  }
		elseif(($leave_start_elements + $leave_end_elements) > $arr_count)  
			{  return array_slice($final_result_arr, $leave_start_elements);  }
		else
			{  return array_slice($final_result_arr, $leave_start_elements, $arr_count - $leave_start_elements - $leave_end_elements);  }
		}
		return $final_result_arr;
	}
		//echo "$inputstring,$start,$end,$includestart,$includeend";
		$startpos=strpos($inputstring,$start);
		if($startpos === false) return 0;
		$startlength=strlen($start);
		$endpos=$startpos+strpos(strstr($inputstring,$start),$end);
		$endlength=strlen($end);
		if($includestart==0)
		  {
		  if($includeend==0)
		    {
			$outputstring=substr($inputstring,$startpos+$startlength,$endpos-$startpos-$startlength);
			}
		  else
		    {
			$outputstring=substr($inputstring,$startpos+$startlength,$endpos-$startpos-$startlength+$endlength);	
			}
		  }
		else
		  {
		  if($includeend==0)
		    {
			$outputstring=substr($inputstring,$startpos,$endpos-$startpos);	
			}
		  else
		    { 
			$outputstring=substr($inputstring,$startpos,$endpos-$startpos+$endlength);	
			}
		  } 
		//echo "<br><br><br>$outputstring";
		if($search_arr && $replace_arr)  
		$outputstring = str_replace($search_arr, $replace_arr, trim($outputstring));
		if($striphtml == 1) $outputstring = strip_tags($outputstring);
		$outputstring = trim($outputstring);
		return $outputstring;
	}




	
}
