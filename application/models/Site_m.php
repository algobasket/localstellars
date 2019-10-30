<?php
Class Site_m extends CI_Model{
	
  function isSiteUnderMaintainance()
  {
     $query = $this->db->where(['status' => 1,'setting_name' => 'maintainance'])
                       ->get('settings');
     if($query->num_rows() == 1)
     {
        foreach($query->result_array() as $r)
        {
           return json_decode($r['json'],true);
        }      
     }                  
  }
  

}