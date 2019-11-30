<?php 
Class Payment_m extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllPaymentMethods(){  
		$query = $this->db->where(['status' => 1])->get('payment_methods');
		foreach ($query->result_array() as $key => $value) {
			$data[] = $value;
		}
		return $data;
	}





}