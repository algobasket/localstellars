<?php

if(!function_exists('cUser'))
{
   /**
    * [cUser description]
    * @param  [type] $value [description]
    * @return [type]        [description]
    */
   function cUser($value){
   	  $ci = get_instance();
   	 if($value == 'name'){
       return ucfirst($ci->session->userdata('fname')) .' '. ucfirst($ci->session->userdata('lname'));
   	 }elseif($value == 'email'){
       return $ci->session->userdata('email');
   	 }elseif($value == 'role'){
       return $ci->session->userdata('role');
   	 }elseif($value == "userId"){
       return $ci->session->userdata('userId');
     }
   }
}



if(!function_exists('cUserDetail'))
{
   /**
    * [lang description]
    * @param  [type] $key [description]
    * @return [type]      [description]
    */
   function cUserDetail(){
      $ci = get_instance();
      $ci->load->model('User_m');
      $userId = $ci->session->userdata('userId');
      return $ci->User_m->getUserData($userId);
   }
}




if(!function_exists('cUserDetailById'))
{
   /**
    * [lang description]
    * @param  [type] $key [description]
    * @return [type]      [description]
    */
   function cUserDetailById($userId){
      $ci = get_instance();
      $ci->load->model('User_m');
      $detail = $ci->User_m->getUserData($userId);
      return $detail;
   }
}




if(!function_exists('lang'))
{
   /**
    * [lang description]
    * @param  [type] $key [description]
    * @return [type]      [description]
    */
   function lang($key){
   	  $ci = get_instance();
      echo $ci->lang->line($key);
   }
}




if(!function_exists('getFlash'))
{
    /**
     * [getFlash description]
     * @return [type] [description]
     */
    function getFlash(){
      $ci = get_instance();
      return $ci->session->flashdata('notify');
    }
}




if(!function_exists('device_info'))
{
  /**
   * [device_info description]
   * @return [type] [description]
   */
   function device_info()
   {
     require APPPATH . 'libraries/mobiledetect/Mobile_Detect.php';
     require APPPATH . 'libraries/detectdevice/detect.php';

     $ci = get_instance();
     $ci->load->model('Crud');
     $country = $ci->Crud->fetchOneWhere('countries',['sortname'=> Detect::ipCountry()]);

     $return = [
      'deviceType'   => Detect::deviceType(),
      'ip'           => Detect::ip(),
      'ipHostname'   => Detect::ipHostname(),
      'ipOrg'        => Detect::ipOrg(),
      'ipCountry'    => Detect::ipCountry(),
      'os'           => Detect::os(),
      'browser'      => Detect::browser(),
      'countryName'  => $country['name']
     ]; 
     $ci->session->set_userdata('device_info',$return);
     return $return;
   }
}



if(!function_exists('token_info'))
{
  function token_info()
  {
    $ci = get_instance();
    $ci->load->model('Crud');
    return json_decode($ci->Crud->fetchOneWhere('settings',['setting_name' => 'token_info'])['json'],true);
  }
}




if(!function_exists('payment_wallet'))
{
  function payment_wallet()
  {
    $ci = get_instance();
    $ci->load->model('Crud');
    return json_decode($ci->Crud->fetchOneWhere('settings',['setting_name' => 'payment_wallet'])['json'],true);
  }
}




if(!function_exists('proper_time'))
{
  function proper_time($datetime)
  {
    return date("F j, Y, g:i a",strtotime($datetime));
  }
}




if(!function_exists('status_info'))
{
  function status_info($status_id)
  {
    $ci = get_instance();
    $ci->load->model('Crud');
    return $ci->Crud->fetchOneWhere('status',['id'=>$status_id]);
  }
}



if(!function_exists('sendgrid'))
{
  function sendgrid($from,$to,$subject,$content)
  {
    $ci = get_instance();
    $ci->load->model('Crud');
    $json = $ci->Crud->fetchOneWhere('settings',['setting_name' => 'sendgrid_api'])['json'];
    $apiKey = json_decode($json,true);
    //print_r($apiKey);exit;
    require APPPATH . 'libraries/vendor/autoload.php';

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom($from['email'], $from['user']);
    $email->setSubject($subject);
    $email->addTo($to['email'], $to['user']);
    //$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $email->addContent(
        "text/html", $content
    );
    $sendgrid = new \SendGrid($apiKey['apiKey']);
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
  }
}



if(!function_exists('countries'))
{
  function countries()
  {
    $ci = get_instance();
    $ci->load->model('Crud');
    return $ci->Crud->fetchAllWhere('countries',['status'=>1]);
  }
}
