<?php
Class Kyc extends ParentController{
  
  /**
   * [__construct description]
   */
  function __construct(){
    parent::__construct();
    $this->load->model('User_m');
    $this->load->model('Kycs_m');
  } 
  
 /**
   * [KYC form function] 
   */


  function form()
  {  
    if($this->input->post('processToVerify'))
    {
      $form = array(
        'fname' => $this->input->post('fname'),
        'lname' => $this->input->post('lname'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'dob'   => $this->input->post('dob'),
        'telegram'      => $this->input->post('telegram'),
        'address1'      => $this->input->post('address1'),
        'address2'      => $this->input->post('address2'),
        'city'          => $this->input->post('city'),
        'state'         => $this->input->post('state'),
        'nationality'   => $this->input->post('nationality'),
        'zipcode'       => $this->input->post('zipcode'),
        'documentType'  => $this->input->post('documentType'),
        'swallet'       => $this->input->post('swallet'),
        'tokenAddress'  => $this->input->post('token-address'),
        'created'       => date('Y-m-d h:i a')   
      );

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['file_name'] = time() . '.jpg';
       
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

       if($this->input->post('documentType') == "passport")
       {
          if(!$this->upload->do_upload('uploadFilePassport'))
          { 
            $this->setFlash('alert',$this->upload->display_errors());
          }else{  
            $data = $this->upload->data();
            $file_name = $data['file_name'];
            $form['passport'] = $file_name;
            
            $this->Crud->update(
              'user',
              ['id'   => $this->getSess('userId')],
              [
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname') 
              ] 
            );

            $this->Crud->update(
              'user_detail',
              ['user_id'   => $this->getSess('userId')],
              ['kyc_detail'=> json_encode($form,true),'kyc_status' => 4,'account_level'=> 1] 
            );
            $this->Crud->create('kyc',[ 
              'user_id'    => $this->getSess('userId'), 
              'kyc_data'   => json_encode($form,true),
              'checked_by' => NULL,
              'created'    => date('d-m-Y h:i:s'),
              'checked_on' =>  NULL,
              'status'     => 4   
            ]);   
            redirect('kyc/thankyou');
          }
       }elseif($this->input->post('documentType') == "national-ID"){

           
           $frontDocName = $_FILES['fileUpload']['name'][0];
           $frontDocTmp  = $_FILES['fileUpload']['tmp_name'][0];

           $backDocName = $_FILES['fileUpload']['name'][1];
           $backDocTmp  = $_FILES['fileUpload']['tmp_name'][1];
           


          if(!$frontDocName && !$backDocName)
          {
             $this->setFlash('alert',$this->upload->display_errors());
          }else{  

                 $newFrontDocFile = rand(1,99999999).time().'.jpg';
                 $newBackDocFile  = rand(1,99999999).time().'.jpg';

                 $move1 = move_uploaded_file($frontDocTmp,'./uploads/'.$newFrontDocFile);
                 $move2 = move_uploaded_file($backDocTmp,'./uploads/'.$newBackDocFile);

                 if($move1 && $move2)
                 {
                      $form['nationalID'] = ['frontDoc' => $newFrontDocFile,'backDoc' => $newBackDocFile];
                      $this->Crud->update(
                        'user',
                        ['id'   => $this->getSess('userId')],
                        [
                          'fname' => $this->input->post('fname'),
                          'lname' => $this->input->post('lname')
                        ] 
                      );

                     $this->Crud->update(
                      'user_detail',
                      ['user_id'   => $this->getSess('userId')],
                      ['kyc_detail'=> json_encode($form,true),'kyc_status' => 4] 
                    );
                       redirect('kyc/thankyou'); 
                 }else{
                  $this->setFlash('alert','<div class="alert alert-warning">Invalid Uploaded Documents</div>');
                   redirect('kyc/form'); 
                 } 
                    
          }

       }elseif($this->input->post('documentType') == "driver-licence"){
           $uploadFileDriverLicence = $this->upload->do_upload('uploadFileDriverLicence');
          if(!$uploadFileDriverLicence)
           {
              $this->setFlash('alert',$this->upload->display_errors());
           }else{
               $data = $this->upload->data();
                 $file_name = $data['file_name'];
                 $form['driverLicence'] = $file_name;
                
                $this->Crud->update(
                  'user',
                  ['id'   => $this->getSess('userId')],
                  [
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname')
                  ] 
                );

                $this->Crud->update(
                  'user_detail',
                  ['user_id'   => $this->getSess('userId')],
                  ['kyc_detail'=> json_encode($form,true),'kyc_status' => 4] 
                );  
              redirect('kyc/thankyou');  
           } 

       }

        
    }
    $data['user'] = $this->User_m->getUserData($this->getSess('userId'));
    $this->frontend('kyc-form',$data); 
  }
  

   /**
   * [KYC application]
   */

  function application()
  { 

    $this->frontend('kyc-application',[]);
  }
  
  function details()
  {
    $data = $this->Kycs_m->getKycDetail($this->getSess('userId'));
    $this->frontend('kyc-details',['detail' => $data]);
  }
  
   /**
   * [Thankyou Message]
   */

  function thankyou()
  {
    $this->frontend('kyc-thankyou',[]);
  }



}	
