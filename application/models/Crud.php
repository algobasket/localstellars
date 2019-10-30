<?php
Class Crud extends CI_Model{
	
  /**
   * [create description]
   * @param  [type] $tableName [description]
   * @param  [type] $data      [description]
   * @return [type]            [description]
   */
	function create($tableName,$data){ 
     $this->db->insert($tableName,$data);
     return true;
	}
  

  /**
   * 
   * @param  [type] $tableName [description]
   * @param  [type] $status    [description]
   * @return [type]            [description]
   */
  function getAllRecordByStatus($tableName,$status)
  {
         $this->db->select($tableName.'.*,status.statusCode as statusCode,status.statusName as statusName');
         $this->db->from($tableName);
         $this->db->join('user','user.id=order.user_id','left');
         $this->db->join('user_detail','user_detail.user_id=order.user_id','left');
         $this->db->join('status','status.statusCode=order.status','left');
           if(isset($status)){
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
   * [fetch description]
   * @param  [type] $tableName [description]
   * @return [type]            [description]
   */
  function fetch($tableName)
  {
    $query = $this->db->get($tableName);
    if($query->num_rows() > 0){
        foreach($query->result_array() as $row)
         $data[] = $row;

        return $data;   
      }     
  }
  
  /**
   * [fetchAllWhere description]
   * @param  [type] $tableName [description]
   * @param  [type] $where     [description]
   * @return [type]            [description]
   */
  function fetchAllWhere($tableName,$where)
  {
    $query = $this->db->where($where)->get($tableName);
    if($query->num_rows() > 0){
        foreach($query->result_array() as $row)
         $data[] = $row;

        return $data;   
      }     
  }

  /**
   * [fetchOneWhere description]
   * @param  [type] $tableName [description]
   * @param  [type] $where     [description]
   * @return [type]            [description]
   */
  function fetchOneWhere($tableName,$where)
  {
    $query = $this->db->where($where)->get($tableName);
    if($query->num_rows() > 0){
        foreach($query->result_array() as $row)
         $data = $row;

        return $data;   
      }     
  }
   
  /**
   * [update description]
   * @param  [type] $tableName [description]
   * @param  [type] $where     [description]
   * @param  [type] $data      [description]
   * @return [type]            [description]
   */
	function update($tableName,$where,$data){
     $this->db->where($where);
     $this->db->update($tableName,$data);
     return true;
	}
  
  /**
   * [upsert description]
   * @param  [type] $tableName [description]
   * @param  [type] $where     [description]
   * @param  [type] $data      [description]
   * @return [type]            [description]
   */
  function upsert($tableName,$where,$data) 
  {  
     $query = $this->db->where($where)->get($tableName);
     if($query->num_rows() == 1)
     {
        $this->update($tableName,$where,$data);
     }else{
        $this->create($tableName,array_merge($where,$data));
     }
     return true;
  }

  /**
   * [delete description]
   * @param  [type] $tableName [description]
   * @param  [type] $where     [description]
   * @return [type]            [description]
   */
	function delete($tableName,$where){
     $this->db->where($where);
     $this->db->delete($tableName);
     return true;
	}


}