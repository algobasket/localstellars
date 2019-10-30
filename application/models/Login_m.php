<?php 
Class Login_m extends CI_Model{
	
	const USER  = "user";
	const USER_DETAIL = "user_detail"; 
	

	/**
	 * @email     [string]
	 * @password  [string]
	 * @data      [array]
	 */
	function login ($email, $password) 
	{
      $data = FALSE;
	  $query = $this->db->select("*")
	                    ->from(SELF::USER)
	                    ->where([
	                    	'email' => $email,
	                    	'password' => $password
	                    ])
	                    ->get();

	  if($query->num_rows() == 1)
	  {
        foreach($query->result_array() as $row)
        	$data = $row;
	  } 
	  return $data;                   
	}

    

    /**
     * @param  [Array]
     * @return [Boolean]
     */
	function signup ($data)
	{

		$this->db->insert(SELF::USER,$data);
		$uid = $this->db->insert_id();
		$this->db->insert(SELF::USER_DETAIL,[ 'user_id' => $uid ]);
		if($this->session->userdata('referrer_user_id') && $this->session->userdata('referral_id'))
		{
          $this->db->insert('referrals',[
          	'referral_id' => $this->session->userdata('referral_id'),
          	'referrer_user_id' => $this->session->userdata('referrer_user_id'),
          	'user_id' => $uid,
          	'earning' => 0,
          	'created' => date('d-m-Y h:i:s'),
          	'updated' => date('d-m-Y h:i:s'),
          	'status'  => 1
          ]);
          $this->session->unset_userdata('referrer_user_id');
          $this->session->unset_userdata('referral_id');
          
		}
		if($uid){ 
          return ['status' => true,'uid' => $uid]; 
		}else{
          return ['status' => false]; 
		}
	}

 
}