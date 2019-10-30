<?php
Class Token_m extends CI_Model{
    
    /**
     * [__construct description]
     */
  	function __construct()
    {
  		parent::__construct();
  	}
  


    /**
     * [events description]
     * @return [type] [description]
     */
    function events($status = "")
    {
    	 $this->db->select('schedule_events.*,status.statusCode as statusCode,status.statusName as statusName,status.statusColor as statusColor');
         $this->db->from('schedule_events');
         $this->db->join('status','status.statusCode=schedule_events.status','left');
         if(isset($status))
         {
             $this->db->where('order.status',$status);
         }
        $query = $this->db->get();
       // echo $this->db->last_query();
       if($query->num_rows() > 0){
         foreach($query->result_array() as $row)
          $data[] = $row;

        return $data;   
      } 
    }

    /**
     * [totalTokenOfAllusers description]
     * @return [type] [description]
     */
    function totalTokenOfAllusers()
    {
    	$query = $this->db->query("SELECT buy_currency_amount as token FROM `order`");

        foreach($query->result_array() as $r2)
        {
           @$data += $r2['token'];
        }
        return $data;
    }

    /**
     * [eventsById description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    function eventsById($id = "")
    {
         $this->db->select('schedule_events.*,status.statusCode as statusCode,status.statusName as statusName');
         $this->db->from('schedule_events');
         $this->db->join('status','status.statusCode=schedule_events.status','left');
         $this->db->where('schedule_events.id',$id);
        $query = $this->db->get();
       // echo $this->db->last_query();
       if($query->num_rows() > 0){
         foreach($query->result_array() as $row)
          $data = $row;

        return $data;   
      } 
    }

    
    /**
     * [tokensSaleGraphData description]
     * @param  [type] $period [description]
     * @param  [type] $userId [description]
     * @return [type]         [description]
     */
    function tokensSaleGraphData($period, $userId)
    { 
      $sum = 0;
      $data = [];
      if($period == 7)
      {
        for($i = 0;$i < $period;$i++)
        {
           $date  = date('d-m-Y',strtotime("-".$i." day"));
           $where = ['user_id' => $userId,'status' => 1];
           $query = $this->db->select('buy_currency_amount')
                             ->from('order')
                             ->where($where)
                             ->like('created',$date,'both')
                             ->get();
           //echo $this->db->last_query();
           //echo '<br>';                  
           foreach($query->result_array() as $r)
           {
             $sum += $r['buy_currency_amount'] ? $r['buy_currency_amount'] : 0;
           }
           $data[] = $sum; 
           $sum = 0;                 
        }
        return $data;


      }elseif($period == 30){

        for($i = 0;$i < $period;$i++)
        {
           $date  = date('d-m-Y',strtotime("-".$i." day"));
           $where = ['user_id' => $userId,'status' => 1];
           $query = $this->db->select('buy_currency_amount')
                             ->from('order')
                             ->where($where)
                             ->like('created',$date,'both')
                             ->get();
           //echo $this->db->last_query();
           //echo '<br>';  
           foreach($query->result_array() as $r)
           {
             $sum += $r['buy_currency_amount'] ? $r['buy_currency_amount'] : 0;
           }
            $data[] = $sum;
            $sum = 0;                  
        }
        return $data;


      }elseif($period == 1){
          for($i = 0;$i < 365;$i++)
          {
            $date  = date('d-m-Y',strtotime("-".$i." day"));
            $where = ['user_id' => $userId,'status' => 1];
            $query = $this->db->select('buy_currency_amount')
                             ->from('order')
                             ->where($where)
                             ->like('created',$date,'both')
                             ->get();
            echo $this->db->last_query();
            echo '<br>';  
           foreach($query->result_array() as $r)
           {
             $sum += $r['buy_currency_amount'] ? $r['buy_currency_amount'] : 0;
           }
              $data[] = $sum; 
              $sum = 0;                 
        }
        return $data;
      }

    }






	
}