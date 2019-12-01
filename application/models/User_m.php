<?php 
 use Plivo\RestClient;
Class User_m extends CI_Model{


  /**
   * [getUserData description]
   * @param  [type] $userId [description]
   * @return [type]         [description]
   */
	function getUserData($userId)
  {

      $query = $this->db->select('user.*,user_detail.*,status.*,account_level.name as acctlvl,account_level.*')
                        ->from('user')
                        ->join('user_detail','user_detail.user_id=user.id','left')
                        ->join('status','status.statusCode=user.status','left')
                        ->join('account_level','account_level.id=user_detail.account_level','left') 
                        ->where('user.id',$userId)
                        ->get();
      //echo $this->db->last_query();
      if($query->num_rows() == 1){
        foreach($query->result_array() as $row)
         $data = $row;

        return $data;  	
      }
	}


  /**
   * [getAllUsers description]
   * @param  [type] $status [description]
   * @return [type]         [description]
   */
  function getAllUsers($status)
  {
           $this->db->select('user.*,user_detail.*,status.*');
           $this->db->from('user');
           $this->db->join('user_detail','user_detail.user_id=user.id','left');
           $this->db->join('status','status.statusCode=user.status','left');
           if(isset($status)){
             $this->db->where('user.status',$status);
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
   * [editUserData description]
   * @param  [type] $userId [description]
   * @param  [type] $data   [description]
   * @param  [type] $data2  [description]
   * @return [type]         [description]
   */
  function editUserData($userId,$data,$data2)
  {
    if($data){
       $this->db->where('id',$userId);
       $this->db->update('user',$data);
    }
    if($data2){
      $this->db->where('user_id',$userId);
      $this->db->update('user_detail',$data2);
    }
    return true;
  } 
  

  /**
   * [editUserSettingsData description]
   * @param  [type] $userId [description]
   * @param  [type] $data   [description]
   * @return [type]         [description]
   */
  function editUserSettingsData($userId,$data)
  {
       $this->db->where('id',$userId);
       $this->db->update('user_detail',$data);
       return true;
  }  



  /**
   * [isUserPasswordValid description]
   * @param  [type]  $userId   [description]
   * @param  [type]  $password [description]
   * @return boolean           [description]
   */
  function isUserPasswordValid($userId, $password)
  {
       $query = $this->db->where(['id' => $userId,'password' => $password])
                         ->get('user');                
       if($query->num_rows() == 1){
        return true;
       }     
  }


  
  /**
   * [changeUserPassword description]
   * @return [type] [description]
   */
  function changeUserPassword($userId,$password)
  {
    $this->db->where('id',$userId);
    $this->db->update('user',['password' => $password]);
    return true;
  }  
  


  /**
   * [activateUser description]
   * @return [type] [description]
   */
  function activateUser($id)
  {
    $this->db->where('id',$id);
    $this->db->update('user',['status' => 1]);
    return true;
  } 


  /**
   * [suspendUser description]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */ 
  function suspendUser($id)
  {
    $this->db->where('id',$id);
    $this->db->update('user',['status' => 3]);
    return true;
  }

  
  /**
   * [delUser description]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  function delUser($id){
    $this->db->where('id',$id);
    $this->db->delete('user');
    $this->db->where('user_id',$id);
    $this->db->delete('user_detail');
    return true;
  }

  

  /**
   * [activityLog description]
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  function activityLog($data)
  {
    $this->db->insert('activity_log',$data);
    return true;
  }
   


   /**
    * [getUserActivityLog description]
    * @param  [type] $userId [description]
    * @return [type]         [description]
    */
  function getUserActivityLog($userId)
  {
    $query = $this->db->select('activity_log.*,user.*')
                      ->from('activity_log')
                      ->join('user','user.id=activity_log.user_id','left')
                      ->where(['activity_log.user_id' => $userId])
                      ->order_by('activity_log.id','DESC')
                      ->get();
    foreach($query->result_array() as $r)
      $data[] = $r;

    return $data;
  }
  


  /**
   * [getLastLogin - User's Last Login Date]
   * @return [type] [description]
   */
  function getLastLogin($userId)
  {
     $query = $this->db->select('date')
                       ->from('activity_log') 
                       ->where(['log_type' => 'auth','user_id' => $userId])
                       ->get();
     return @$query->result_array()[0]['date'];                      
  }



  /**
   * [totalUsersByStatus description]
   * @param  [type] $status [description]
   * @return [type]         [description]
   */
  function totalUsersByStatus($status)
  { 
    if($status){
      return $this->db->where('status',$status)->get('user')->num_rows();
    }else{
      return $this->db->get('user')->num_rows();
    }
    
  }



 /**
  * [getAllReferral description]
  * @param  [type] $status [description]
  * @return [type]         [description]
  */
 function getAllReferral($status)
 { 
    if($status){
      return $this->db->select('referrals.*,user.*,status.*')
                      ->from('referrals')
                      ->join('user','user.id=referrals.user_id','left')
                      ->join('status','status.id=referrals.status','left')
                      ->where('status',$status)
                      ->get()
                      ->result_array();
    }else{
     return $this->db->select('referrals.*,user.*,status.*')
                      ->from('referrals')
                      ->join('user','user.id=referrals.user_id','left')
                      ->join('status','status.id=referrals.status','left')
                      ->get()
                      ->result_array();
    }
    
  }
  
  /**
   * [getUserReferalHistory description]
   * @param  [type] $userId [description]
   * @return [type]         [description]
   */
  function getUserReferalHistory($userId)
  {
         return $this->db->select('referrals.*,referrals.status as statusRef,referrals.created as createdRef,user.*,status.*')
                      ->from('referrals')
                      ->join('user','user.id=referrals.user_id','left')
                      ->join('status','status.id=referrals.status','left')
                      ->where('referrer_user_id',$userId)
                      ->get()
                      ->result_array();

  }

  /**
   * [getVacation description]
   * @param  [type] $userId [description]
   * @return [type]         [description]
   */
  function getVacation($userId)
  {
    $query = $this->db->select('on_vacation')->from('user_detail')->where(['user_id'=>$userId])->get();
    $row = $query->result_array()[0];
    if($row){
      return json_decode($row,true);
    }else{
      return false;
    }
  }


  /**
   * [sendPlivio description]
   * @param  [type] $to   [description]
   * @param  [type] $from [description]
   * @param  [type] $msg  [description]
   * @return [type]       [description]
   */
  function sendPlivio($to,$from,$msg)
  {
      require APPPATH . 'libraries/vendor/autoload.php';
      $query = $this->db->select('json')
                        ->from('settings')
                        ->where(['setting_name'=>'plivio_api'])
                        ->get();
      $json   = $query->result_array()[0]['json']; 
      $api    = json_decode($json,true);
      try{
          $client = new RestClient($api['authID'],$api['authToken']); 
            $message_created = $client->messages->create(
             $from,
             [$to],
             $msg 
           );  
          return $message_created->getStatusCode(); 
      }catch(Ex $e){
          return $e; 
      } 
          
   } 



}