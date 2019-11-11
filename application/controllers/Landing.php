<?php
Class Landing extends ParentController{


    /**
     * [__construct description]
     */
		function __construct()
		{
			parent::__construct();
			$this->lang->load('auth_lang','english');
		}


    /**
     * [index description]
     * @return [type] [description]
     */
		function index()
		{
	        $data['out'] = $this->Site_m->isSiteUnderMaintainance();
					$data2['deviceInfo'] = $this->getDeviceInfo();
	        if($data['out'])
	        {
	            $this->load->view('frontend/maintainance',$data);
	        }else{
	            $this->load->view('landing',$data2);
	        }
		}


    /**
     * [buy description]
     * @return [type] [description]
     */
	  function buy()
	  {

	  }


    /**
     * [sell description]
     * @return [type] [description]
     */
	  function sell()
	  {
      $this->load->view('test');
	  }


    /**
     * [advertise description]
     * @return [type] [description]
     */
		function advertise()
		{
			if($_POST)
			{
				$json = json_encode($_POST,true);
				$data = [
					'user_id' => $this->getSess('userId'),
					'json'    => $json,
					'created' => date('d-m-Y h:i:s'),
					'updated' => date('d-m-Y h:i:s'),
					'status'  => 1
				];
				$this->Crud->create('user_advertise',$data);
				$this->setFlash('<div class="alert alert-success">'.$this->lang->line('advertise_success').'</div>');
				redirect('/advertise');
			}
      $this->load->view('frontend/advertise');
		}


		function setCoin()
		{
			$coin = $this->uri->segment(3);
			if(isCoinExist($coin) == true){ 

			}
		}


    /**
     * [whitepaper description]
     * @return [type] [description]
     */
		function whitepaper()
		{
	      $this->load->helper('download');
	      force_download('./public/documents/whitepaper.pdf', NULL);
		}



    /**
     * [newsletter description]
     * @return [type] [description]
     */
    function newsletter()
    {
           if ($_SERVER["REQUEST_METHOD"] == "POST")
           {

            $email = filter_var(trim($_POST["subscribe_email"]), FILTER_SANITIZE_EMAIL);
            $message = "You Subcribed Now";
            $email_content = "Email: $email\n\n";
            $email_content = "Message:\n$message\n";
            //echo $email_content ;
            if ( /*empty($name)  OR empty($message) OR*/ !filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                http_response_code(400);
                echo "Oops! There was a problem with your submission. Please complete the form and try again."; /*--------- Contact submission erroe Message ---------------*/
                exit;
            }
            $recipient = "office@ixinium.io"; /*----- Add your email address here------*/
            $subject = "Emails for newslatter";/*------ Add your email subject here------*/
            $email_content = "Email: $email\n\n";
            $email_content .= "Message:\n$message\n";
            $email_headers = "From: <$email>";
            if (mail($recipient, $email_content, $email_headers)) {
                http_response_code(200);
                echo "Thank You! Your message has been sent."; /*---------  Success Message ---------------*/
            } else {
                http_response_code(500);
                echo "Oops! Something went wrong and we couldn't send your message.";   /*--------- Contact Error Message ---------------*/
            }
          }
          else
          {
            http_response_code(403);
            echo "There was a problem with your submission, please try again."; /*--------- Contact submission erroe Message ---------------*/
          }
    }



    /**
     * [contact description]
     * @return [type] [description]
     */
    function contact()
    {
         if ($_SERVER["REQUEST_METHOD"] == "POST")
         {
            $name = strip_tags(trim($_POST["full_name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $message = trim($_POST["message"]);
            $email_content = "Name: $name";
            $email_content .= "Email: $email\n\n";
            $email_content .= "Message:\n$message\n";
            //echo $email_content ;
            if ( empty($name)  OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                http_response_code(400);
                echo "Oops! There was a problem with your submission. Please complete the form and try again.";/*--------- Contact submission erroe Message ---------------*/
                exit;
            }
            $recipient = "office@localstellars.com"; /*----- Add your email address here------*/
            $subject = "Emails For Newslatters $name";/*------ Add your email subject here------*/
            $email_content = "Name: $name";
            $email_content .= "Email: $email\n\n";
            $email_content .= "Message:\n$message\n";
            $email_headers = "From: $name <$email>";
            if (mail($recipient, $subject, $email_content, $email_headers)) {

                http_response_code(200);
                echo "Thank You! Your message has been sent."; /*---------  Success Message ---------------*/
            } else {

                http_response_code(500);
                echo "Oops! Something went wrong and we couldn't send your message."; /*--------- Contact Error Message ---------------*/
            }
        }else{
        http_response_code(403);
        echo "There was a problem with your submission, please try again."; /*--------- Contact submission erroe Message ---------------*/
       }
    }

    /**
     * [test description]
     * @return [type] [description]
     */
    function test()
    {
        $autoloader = __DIR__ . '/relative/path/to/Bitpay/Autoloader.php';
        if (true === file_exists($autoloader) &&
            true === is_readable($autoloader))
        {
            require_once $autoloader;
            \Bitpay\Autoloader::register();
        } else {
            throw new Exception('BitPay Library could not be loaded');
        }
    }



}
