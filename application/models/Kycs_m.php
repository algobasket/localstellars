<?php
Class Kycs_m extends CI_Model{


    	function __construct()
    	{
    		parent::__construct();
    	} 
        
      function getAllKycs($KycStatus)
      {
           $this->db->select('user.*,user_detail.*,status.*');
           $this->db->from('user');
           $this->db->join('user_detail','user_detail.user_id=user.id','left');
           $this->db->join('status','status.statusCode=user.status','left');
           if(isset($KycStatus))
           {
             $this->db->where('user_detail.kyc_status',$KycStatus);
           }
           $query = $this->db->get();
          if($query->num_rows() > 0)
          {
            foreach($query->result_array() as $row)
             $data[] = $row;

            return $data;   
          }	
      }

      function isKycVerified($uid) 
      {
        $query = $this->db->select('kyc_status')
                          ->where('user_id',$uid)
                          ->get('user_detail');
        $row = $query->result_array()[0];
        return ($row['kyc_status'] == 1) ? true : false;                  
      }

      function getKycDetail($uid)  
      {
        $query = $this->db->select('user_detail.*,account_level.*,user.exid as exid,kyc.checked_on as checked_on,kyc.checked_by as checked_by,kyc.checked_on')
                          ->from('user_detail')
                          ->join('account_level','account_level.id=user_detail.account_level','left')
                          ->join('user','user.id=user_detail.user_id','left')
                          ->join('kyc','kyc.user_id=user_detail.user_id','left')
                          ->where('user_detail.user_id',$uid)
                          ->get();
        $row = $query->result_array();
        return $row;                  
      } 
      
      function approve($id)
      {
        $this->db->where('id',$id);	
        $this->db->update('user_detail',['kyc_status' => 1]);

        $this->db->where('user_id',$id);  
        $this->db->update(
          'kyc',
          [
            'checked_on' => date('d-m-Y h:i:s'),
            'checked_by'=>'Verification Team',
            'status' => 1
          ]
        );
        return true;	
      }

      function missing($id)
      {
        $this->db->where('id',$id); 
        $this->db->update('user_detail',['kyc_status' => 6]);

        $this->db->where('user_id',$id);  
        $this->db->update(
          'kyc',
          [
            'checked_on' => date('d-m-Y h:i:s'),
            'checked_by'=>'Verification Team',
            'status' => 6
          ]
        );
        return true;  
      }

      function reject($id)
      {
        $this->db->where('id',$id); 
        $this->db->update('user_detail',['kyc_status' => 7]);

        $this->db->where('user_id',$id);  
        $this->db->update(
          'kyc',
          [
            'checked_on' => date('d-m-Y h:i:s'),
            'checked_by'=>'Verification Team',
            'status' => 7
          ]
        );
        return true;  
      }

      function progress($id)
      {
        $this->db->where('id',$id);	
        $this->db->update('user_detail',['kyc_status' => 4]);

        $this->db->where('user_id',$id);  
        $this->db->update(
          'kyc',
          [
            'checked_on' => date('d-m-Y h:i:s'),
            'checked_by'=>'Verification Team',
            'status' => 4
          ]
        );
        return true;	
      }

      function suspend($id)
      {
        $this->db->where('id',$id);	
        $this->db->update('user_detail',['kyc_status' => 3]);

        $this->db->where('user_id',$id);  
        $this->db->update(
          'kyc',
          [
            'checked_on' => date('d-m-Y h:i:s'),
            'checked_by'=>'Verification Team',
            'status' => 3
          ]
        );
        return true;	
      }

      function delete($id)
      { 
        $this->db->where('user_id',$id);  
        $this->db->update(
          'user_detail',
          [
            'kyc_detail' => "",
            'kyc_status' => 0
          ]
        );

        $this->db->where('user_id',$id);  
        $this->db->delete('kyc');
        return true;	
      }

	
}