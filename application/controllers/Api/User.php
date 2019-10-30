<?php 
Class User extends ParentController{


	function __construct(){
		parent::__construct();
		$this->load->model('User_m');
	}
    

    /**
     * [updateProfile description]
     * @return [type] [description]
     */
	function updateProfile(){ 
      if($this->input->post('api') == true){
      	  $userId = $this->input->post('userId') ? $this->input->post('userId') : $this->getSess('userId');
          $this->User_m->editUserData(
          $userId ,
          array(
            'fname' => $this->input->post('fname'),
            'email' => $this->input->post('email'),
            'updated' => date('d-m-Y')  
          ),
          array(
            'mobile_number' => $this->input->post('mobile'),
            'dob' => $this->input->post('dob'),
            'nationality' => $this->input->post('nationality'),
            'updated' => date('d-m-Y')
          )
         );
         return true;
      }
	}
   

    /**
     * [updateSettings description]
     * @return [type] [description]
     */
    function updateSettings(){ 
      if($this->input->post('api') == true){
      	  $userId = $this->input->post('userId') ? $this->input->post('userId') : $this->getSess('userId');
          $this->User_m->editUserSettingsData( 
          $userId ,
          array(
          	'settings' => json_encode(array(
              'save_log' => $this->input->post('save_log'),
              'pass_change_confirm' => $this->input->post('pass_change_confirm'),
              'latest_news' => $this->input->post('latest_news'),  
              'activity_alert' => $this->input->post('activity_alert'),  
            ),true)
          )
         );
         return true;
      }
	}


    /**
     * [isUserPasswordValid description]
     * @return boolean [description]
     */
	function isUserPasswordValid(){
      if($this->input->post('api') == true){
      	 $userId = $this->input->post('userId') ? $this->input->post('userId') : $this->getSess('userId');
      	 $hashPassword = hash('sha256',$this->input->post('old_pass'));
      	 if($this->User_m->isUserPasswordValid($userId,$hashPassword) == true){
           echo 1; 
      	 }
      }
	}
 

 /**
  * [changeUserPassword description]
  * @return [type] [description]
  */
  function changeUserPassword(){
     if($this->input->post('api') == true){
       $hashPass = hash('sha256',$this->input->post('password'));
       $userId = $this->input->post('userId') ? $this->input->post('userId') : $this->getSess('userId');
       if($this->User_m->changeUserPassword($userId,$hashPass) == true){
         echo 1; 
       }
     } 
  }   
  

  function addUserWallet() 
  {
    $data = [
      'currencies' => json_encode(['xxa' => $this->input->post('token_addr')],true)
    ];
    $this->Crud->update('user_detail',['user_id' => $this->getSess('userId')],$data);
    return true;
  }


  function test()
  {
    

    // print_r(sendgrid(
    //   $from = ['email' => 'test@ixinium.io','user' => 'ixinium'],
    //   $to   = ['email' => 'algobasket@gmail.com','user' => 'algobasket'],   
    //   $subject   = "Okay",
    //   $content   = "Okay Content"
    // ));
    
     // $email_t = ['user' => 'algobasket','token' => rand(1,999999).time()];
     // echo $html =  $this->load->view('email-templates/email-confirm',$email_t,true);
     // exit;
     // sendgrid(
     //    $from = ['email' => 'no-reply@ixinium.io','user' => 'Ixinium.io'],
     //    $to   = ['email' => 'algobasket@gmail.com','user' => 'algo'],   
     //    $subject   = "Thanks for registering to Ixinium.io",
     //    $content   = $html
     //  );


  }


}