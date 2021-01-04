<?php
use League\OAuth2\Client\Provider\Google;
Class Auth extends ParentController{
   

   protected $facebookAppId = "";
   protected $facebookAppSecret = "";

   protected $googleAppId = "AIzaSyAdN0tBmeemR6-it6aQHGCu8Qk1yibotn8";
   protected $googleAppSecret = "975521120700-f232k53cn1l0e0bkmcqge1fnrrugd83t.apps.googleusercontent.com";

    /**
     * [__construct description]
     */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Login_m');
		$this->load->model('User_m');
		$this->lang->load('auth_lang','english');
		$this->load->library('form_validation');
		//if($this->getSess('userId')){redirect('/welcome');}
	}
    
    /**
     * [index description]
     * @return [type] [description]
     */
    function index(){
    	redirect('/');
    }

    /**
     * [login description]
     * @return [type] [description]
     */
	function login()
	{
	  if($this->input->post('login'))
	  {  
	  	 $this->form_validation->set_rules('email','Email','valid_email|trim|required');
	  	 if($this->form_validation->run() == true)
	  	 {      
	  	 	 $email = $this->input->post('email');
	  	 	 $pass  = $this->input->post('password');
	  	 	 $result = $this->Login_m->login($email,hash('sha256',$pass));
            
	           if( $result == NULL )
	         {
	            $this->setFlash('<div class="alert alert-danger">'.$this->lang->line('auth_userNotFound').'</div>');
	            redirect('/auth/login');
	         }else{ 
            $device = device_info();
	         	$this->User_m->activityLog([
	         	     'log_type'    => 'auth',	
                 'user_id'     => $result['id'],
                 'device'      => $device['os'],
                 'browser'     => $device['browser'],
                 'device_type' => $device['deviceType'],
                 'date'        => date('d-m-Y h:i:s'),
                 'ip'          => $device['ip'],
                 'country'     => $device['ipCountry'],
                 'status'      => 1
	         	]);
	         	$this->setSess([
	         	   'userId'   => $result['id'],	
	         	   'fname'    => $result['fname'],
	             'email'    => $result['email'],
	             'role'     => $result['role']
	           ]);  

	         	
	         	if($result['role'] == 'customer'){
                  redirect('welcome');
	         	}else{
                  redirect('backend/welcome');
	         	}	
	       }
	  	 }
	  	 else
	  	 {
	  	 	$this->setFlash('<div class="alert alert-danger">'.validation_errors().'</div>');
	  	 } 
	  } 
      $this->load->view('frontend/sign-in',$data=[]);
	}


   
    /**
     * [signup description]
     * @return [type] [description]
     */
	function signup()
	{
	   if($this->input->post('signup'))
	  {  
	  	 $this->form_validation->set_rules('email','Email','valid_email|trim|required');
	  	 $this->form_validation->set_rules('password','Password','min_length[6]|max_length[50]|trim|required');
	  	 if($this->form_validation->run() == true)
	  	 {  
	  	 	$array = [
	  	 	      'exId'     => uniqid().time(),
	  	 	      'fname'	   => $this->input->post('fname'),
              'email'    => $this->input->post('email'),
              'password' => hash('sha256', $this->input->post('password')),
              'role'     => 'customer',
              'created'  => date('d-m-Y'),
              'updated'  => date('d-m-Y'),
              'status'   => 1
	  	 	];
          $result = $this->Login_m->signup($array);
	         if($result['status'] == false)
	         {
	         	   $this->setFlash('<div class="alert alert-danger">'.$this->lang->line('auth_accountAlreadyExist').'</div>');
	                redirect('auth/signup');
	         }else{
                 $token = md5(rand(1,999999).time());
                 $email_t = ['user' => $this->input->post('fname'),'token' => $token];
                 $html =  $this->load->view('email-templates/email-confirm',$email_t,true); 
                 sendgrid(
                    $from = ['email' => 'no-reply@ixinium.io','user' => 'Ixinium.io'],
                    $to   = ['email' => $this->input->post('email'),'user' => $this->input->post('fname')],   
                    $subject   = "Thanks for registering to Ixinium.io",
                    $content   = $html
                  );
                 $this->Crud->update('user_detail',['user_id' => $result['uid']],['email_verify_code' => $token,'kyc_status' => 0,'account_level'=>0]);   

	         }     redirect('auth/signup_success'); 
	  	 }
	  	 else
	  	 {
	  	 	 $this->setFlash('<div class="alert alert-danger">'.validation_errors().'</div>');
	  	 } 
	  } 	
       $this->load->view('frontend/sign-up',$data=[]);
	}
    

    /**
     * [signup_success description]
     * @return [type] [description]
     */
	function signup_success()
	{  
       $this->load->view('frontend/signup-success',[]);  
	}
    


  /**
   * [forgot description]
   * @return [type] [description]
   */
    function forgot()
    { 
      if($this->input->post('forgotPassword'))
      {
        $email = $this->input->post('email');
        $resetCode = uniqid();
        $this->Crud->update('user',['email' => $email],['resetCode' => $resetCode]);
        $userDetail = $this->Crud->fetchAllWhere('user',['email' => $email]);
        foreach($userDetail as $r){
         $exId  = $r['exId'];
         $fname = $r['fname'];
        }
         
        $out = $this->sendEmailTemplate(
	        	$email,
	        	'no-reply@ixiniu.io',
	        	'ixinium',
	        	'Change Password',
	        	'password-request',
	        	[
	        		'fname' => $fname,
	        		'resetlink' => base_url() .'resetPassword/'.$exId.'/'.$resetCode
	        	]);
        if($out){
          $this->setFlash('<div class="alert alert-success">Reset Link Sent To Your Email</div>');
        }
      }	
      $this->load->view('frontend/forgot',[]);	
    }
    



    /**
     * [resetpassword description]
     * @return [type] [description]
     */
    function resetpassword()
    {   
        $exId      = $this->uri->segment(3); 
        $resetCode = $this->uri->segment(4);
        $data = ['exId' => $exId,'resetCode'=>$resetCode];
        $array = $this->Crud->fetchAllWhere('user',$data);
        if(is_array($array))
        {  
           if($this->input->post('changepassword')){
              if($this->input->post('newPassword') == $this->input->post('confirmPassword')){
                $password = hash_hmac('sha256',$this->input->post('newPassword'));
                $this->Crud->update('user',['exId'=>$exId],['password' => $password,'resetCode' => 1]);
                redirect('auth/resetSuccess/'.$exId);
              }
           }
           $this->load->view('frontend/forgot-change-password',$data);  
        }else{
        	die('Wrong Password Reset Link');
        } 
    	
    }
    


    /**
     * [resetSuccess description]
     * @param  [type] $exId [description]
     * @return [type]       [description]
     */
    function resetSuccess($exId)
    { 	
      $this->load->view('forgot-change-password-success');
    }




    /**
     * [facebook description]
     * @return [type] [description]
     */
	function facebook()
	{   
      require APPPATH . 'libraries/vendor/autoload.php';

      $fb = new Facebook\Facebook([
        'app_id' => $this->facebookAppId, // Replace {app-id} with your app id
        'app_secret' => $this->facebookAppSecret,
        'default_graph_version' => 'v3.2',
        ]);

       $helper = $fb->getRedirectLoginHelper();

       $permissions = ['email']; // Optional permissions
       $loginUrl = $helper->getLoginUrl(base_url() . 'auth/facebook_callback', $permissions);

       redirect(htmlspecialchars($loginUrl));
	}
  
  

  /**
   * [facebook_callback description]
   * @return [type] [description]
   */
  function facebook_callback()
  {    
      require APPPATH . 'libraries/vendor/autoload.php';

       $fb = new Facebook\Facebook([
      'app_id' => $this->facebookAppId, // Replace {app-id} with your app id
      'app_secret' => $this->facebookAppSecret,
      'default_graph_version' => 'v3.2',
      ]);

      $helper = $fb->getRedirectLoginHelper();

      try 
      {
        $accessToken = $helper->getAccessToken();
        $response = $fb->get('/me?fields=id,name,email', $accessToken);
        
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

      if (! isset($accessToken)) {
        if ($helper->getError()) {
          header('HTTP/1.0 401 Unauthorized');
          echo "Error: " . $helper->getError() . "\n";
          echo "Error Code: " . $helper->getErrorCode() . "\n";
          echo "Error Reason: " . $helper->getErrorReason() . "\n";
          echo "Error Description: " . $helper->getErrorDescription() . "\n";
        } else {
          header('HTTP/1.0 400 Bad Request');
          echo 'Bad request';
        }
        exit;
      }

        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('{app-id}'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
          // Exchanges a short-lived access token for a long-lived one
          try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
          } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
            exit;
          }

          echo '<h3>Long-lived</h3>';
          var_dump($accessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string) $accessToken;

        $user = $response->getGraphUser();
        print_r($user);
        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
        //header('Location: https://example.com/members.php');
  }



  /**
   * [google description]
   * @return [type] [description]
   */
	function google()
	{
      require APPPATH . 'libraries/vendor/autoload.php';

      $provider = new Google([ 
        'clientId'     => $this->googleAppId,
        'clientSecret' => $this->googleAppSecret,
        'redirectUri'  => base_url() . 'auth/google',   
        'hostedDomain' => 'ixinium.algobasket.com'  
      ]);    

        if (!empty($_GET['error'])) {

            // Got an error, probably user denied access
            exit('Got error: ' . htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8'));

        }elseif(empty($_GET['code'])) {

            // If we don't have an authorization code then get one
            $authUrl = $provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $provider->getState();
            header('Location: ' . $authUrl);
            exit;

        }elseif(empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

            // State is invalid, possible CSRF attack in progress
            unset($_SESSION['oauth2state']);
            exit('Invalid state');

        }else{
            // Try to get an access token (using the authorization code grant)
            $token = $provider->getAccessToken('authorization_code', [
                'code' => $_GET['code']
            ]);
            // Optional: Now you have a token you can look up a users profile data
            try {
                // We got an access token, let's now get the owner details
                $ownerDetails = $provider->getResourceOwner($token);
                // Use these details to create a new profile
                printf('Hello %s!', $ownerDetails->getFirstName());
            } catch (Exception $e) {    
                // Failed to get user details
                exit('Something went wrong: ' . $e->getMessage());
            }
            // Use this to interact with an API on the users behalf
            echo $token->getToken();
            // Use this to get a new access token if the old one expires
            echo $token->getRefreshToken();
            // Unix timestamp at which the access token expires
            echo $token->getExpires();  
        }
	}  
  



  /**
   * [referral description]
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  function referral($id)
  { 
    $query = $this->Crud->fetchOneWhere('user',['exId' => $id]);
    if(is_array($query))
    { 
      $referrer_user_id = $query['id']; 
      $this->setSess([
         'referrer_user_id' => $referrer_user_id,
         'referral_id'      => $id
      ]);
      redirect('auth/signup');  
    }else{
      die("This Page Doesn't Exist!");
    } 
  }

   
   /**
    * [verifyAccountEmail description]
    * @param  [type] $token [description]
    * @return [type]        [description]
    */
   function verifyAccountEmail($token)    
  {  
     $isvalidToken = $this->Crud->fetchOneWhere('user_detail',['email_verify_code' => $token]);
     if($isvalidToken){
      $this->Crud->update('user_detail',['user_id' => $isvalidToken['user_id']],['email_status' => 1,'email_verify_code' => 1]);
      $this->setFlash('<div class="alert alert-success">'.$this->lang->line('auth_verifyAccountEmailSuccess').'</div>');
      redirect('auth/login');
     }
  }



  /**
   * [logout description]
   * @return [type] [description]
   */
	function logout()
	{
      session_destroy();
      redirect('/');
	}





}