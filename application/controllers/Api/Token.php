<?php 
Class Token extends ParentController{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Token_m');
	}



	function tokensSaleGraph()
	{
      $period = $this->input->post('period');
      
      if($period == 7){
       
        for($i = 0;$i < 7;$i++)
        {
           $labels[] = date('d-M',strtotime("-".$i." day"));
        }
         $tokendata  = $this->tokenPeriodData($period);  

      }elseif($period == 30){
      
      for($i = 0;$i < 30;$i++)
        {
           $labels[] = date('d-M',strtotime("-".$i." day"));
        }
         $tokendata  = $this->tokenPeriodData($period); 
        
      }elseif($period == 1){

        for($i = 0;$i < 12;$i++)
        {
           $labels[] = date('M',strtotime("-".$i." month"));
        }
         $tokendata  = [110, 80, 125, 55, 95, 75, 90]; 
      }
      $data = [
      	'labels'    => array_reverse($labels),
      	'tokendata' => array_reverse($tokendata)
      ];
      echo json_encode($data,true); 
	}


	function tokenPeriodData($period)
	{  
	   $return = $this->Token_m->tokensSaleGraphData($period,$this->getSess('userId'));   
	   return $return;
	}


}

