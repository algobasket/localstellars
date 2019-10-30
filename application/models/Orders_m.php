<?php
Class Orders_m extends CI_Model{
  

  /**
   * [__construct description]
   */
	function __construct()
	{
		parent::__construct();
	}
  

  /**
   * [getAllOrders description]
   * @param  [type] $status [description]
   * @return [type]         [description]
   */
  function getAllOrders($status = null)
  {
       $this->db->select('order.*,order.id as oid,order.status as orderStatus,order.created as orderCreated, user.*,user_detail.*,status.*');
           $this->db->from('order');
           $this->db->join('user','user.id=order.user_id','left');
           $this->db->join('user_detail','user_detail.user_id=order.user_id','left');
           $this->db->join('status','status.statusCode=order.status','left');
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
     * [getAllUserOrders description]
     * @param  [type] $user_id [description]
     * @param  [type] $status  [description]
     * @return [type]          [description]
     */
    function getAllUserOrders($user_id = null, $status = null)
    {
       $this->db->select('order.*,order.id as oid,order.created as orderCreated,order.status as orderStatus,user_detail.*,status.*,currencies.currency_symbol as currency_symbol,currencies.currency_name as currency_name');
           $this->db->from('order');
           $this->db->join('user','user.id=order.user_id','left');
           $this->db->join('user_detail','user_detail.user_id=order.user_id','left');
           $this->db->join('currencies','currencies.id=order.buy_currency_id','left');
           $this->db->join('status','status.statusCode=order.status','left');
           $this->db->where('order.user_id',$user_id);
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
     * [getUserContributions description]
     * @param  [type] $user_id [description]
     * @param  [type] $status  [description]
     * @return [type]          [description]
     */
    function getUserContributions($user_id = null, $status = null)
    {
      $data = [];
      $query = $this->db->query("SELECT amount_type,SUM(amount) as amount FROM `order` WHERE user_id = ? AND status = ? GROUP BY amount_type;",array($user_id,$status));
      //echo $this->db->last_query();
      foreach($query->result_array() as $r)
      {
        if($r['amount_type'] == 'BTC'){ $data['btc'] = $r['amount']; };
        if($r['amount_type'] == 'LTC'){ $data['ltc'] = $r['amount']; };
        if($r['amount_type'] == 'ETH'){ $data['eth'] = $r['amount']; };   
      }
      $query2 = $this->db->query("SELECT buy_currency_amount as token FROM `order` WHERE user_id = ? AND status = ?;",array($user_id,$status));

        foreach($query2->result_array() as $r2)
        {
           @$data['xxa'] += $r2['token'] ? $r2['token'] : 0;
        }
        $this->db->where(['user_id' => $user_id]);    
        $this->db->update('user_detail',['wallet' => @$data['xxa']]);
        return $data; 
    }



    /**
     * [getUserTransactions description]
     * @return [type] [description]
     */
    function userTransactions($userId)
    {
       $query = $this->db->select('order.*,status.statusName as statusName,order.status as oStatus,payment.*,payment.status as pStatus')
                         ->from('payment')
                         ->join('order','order.order_number = payment.order_number')
                         ->join('status','status.id = payment.status')
                         ->where('payment.user_id',$userId)
                         ->get();
        foreach($query->result_array() as $r)
        {
          $data[] = $r;
        }              
        return $data;    
    }
    

    /**
     * [getAllUserTransactions description]
     * @return [type] [description]
     */
    function getAllUserTransactions()
    {
       $query = $this->db->select('order.*,order.id as oid,user.fname,user.exId,order.status as oStatus,payment.*,payment.id as pid,status.*,payment.status as pStatus')
                         ->from('payment')
                         ->join('order','order.order_number = payment.order_number','left')
                         ->join('user','user.id = payment.user_id','left')
                         ->join('status','status.id=payment.status')
                         ->order_by('payment.id','DESC')
                         ->get();
        foreach($query->result_array() as $r)
        {
          $data[] = $r;
        }              
        return $data;    
    }


    /**
     * [approve description]
     * @param  [type] $oid [description]
     * @return [type]      [description]
     */
    function approve($oid)
    {
      $this->db->where('id',$oid);	
      $this->db->update('order',['status' => 1]);
      return true;	
    }


    /**
     * [pending description]
     * @param  [type] $oid [description]
     * @return [type]      [description]
     */
    function pending($oid)
    {
      $this->db->where('id',$oid);	
      $this->db->update('order',['status' => 4]);
      return true;	
    }
    

    /**
     * [suspend description]
     * @param  [type] $oid [description]
     * @return [type]      [description]
     */
    function suspend($oid)
    {
      $this->db->where('id',$oid);	
      $this->db->update('order',['status' => 3]);
      return true;	
    }
    

    /**
     * [delete description]
     * @param  [type] $oid [description]
     * @return [type]      [description]
     */
    function delete($oid)
    {
      $this->db->where('id',$oid);	
      $this->db->delete('order');
      return true;	
    }
	
}