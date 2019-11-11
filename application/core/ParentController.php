<?php
Class ParentController extends CI_Controller{

	/**
	 * [__construct description]
	 */
	function __construct()
	{
		parent::__construct();
		$this->lang->load(['common_lang','site_lang'],'english');
		$this->load->library('parser');
        $this->load->helper('common');
		$this->load->helper('currency');
        $this->load->model('Crud');
		$this->load->model('Site_m');

	} 

    /**
     * [frontend description]
     * @param  [type] $pageName [description]
     * @param  [type] $data     [description]
     * @return [type]           [description]
     */
	function frontend($pageName,$data)
	{
  	  $data['baseurl'] = base_url();
  	  $data['layout']  = $pageName;
      $data['out'] = $this->Site_m->isSiteUnderMaintainance();
      if($data['out'])
      {
        $this->load->view('frontend/maintainance',$data);
      }else{
         if($this->getSess('role') != 'customer')
        {
          exit("<center><h1>Sorry this page doesn't exist!</h1></center>");
        }

        if(in_array($pageName,$this->pageBlocker()))
        {
          exit("<center><h1>Sorry this page is blocked!</h1></center>");
        }
        $this->load->view('common/layout',$data);
      }

	}  

    /**
     * [backend description]
     * @param  [type] $pageName [description]
     * @param  [type] $data     [description]
     * @return [type]           [description]
     */
	function backend($pageName,$data)
	{
      if($this->getSess('role') != 'admin')
      {
        exit("This Page Doesn't Exist");
      }
      $data['baseurl'] = base_url();
	    $data['layout']  = $pageName;
      $this->load->view('common/backend-layout',$data);
	}

    /**
     * [lang description]
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
	function lang($name)
	{
	  return $this->lang->line($name);
	}

    /**
     * [setSess description]
     * @param [type] $data [description]
     */
	function setSess($data)
	{
      $this->session->set_userdata($data);
	}

    /**
     * [getSess description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
	function getSess($data)
	{
      return $this->session->userdata($data);
	}

    /**
     * [remSess description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
	function remSess($data)
	{
      $this->session->unset_userdata($data);
      return true;
	}

    /**
     * [setFlash description]
     * @param [type] $data [description]
     */
	function setFlash($data)
	{
      $this->session->set_flashdata('notify',$data);
	}

    /**
     * [getFlash description]
     * @return [type] [description]
     */
	function getFlash()
	{
      return $this->session->flashdata('notify');
	}

    /**
     * [isSiteUnderMaintainance description]
     * @return boolean [description]
     */
	function isSiteUnderMaintainance()
	{
	   $data['out'] = $this->Site_m->isSiteUnderMaintainance();
       if($data['out'])
       {
         $this->load->view('frontend/maintainance',$data);
       }
	}

    /**
     * [sendEmailTemplate description]
     * @return [type] [description]
     */
	function sendEmailTemplate($to,$from,$fromName,$sub,$template,$data)
	{
        $this->load->library('email');

        $html = $this->load->view('email-templates/'.$template,$data,true);
        $config=array(
		'charset'=>'utf-8',
		'wordwrap'=> TRUE,
		'mailtype' => 'html'
		);

		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from($from, $fromname);
		$this->email->subject($subject);
		$this->email->message($html);
		if($this->email->send()){
			return true;
		}
	}

	function getDeviceInfo()
	{
		device_info();
		return $this->session->userdata('device_info');
	}


  function pageBlocker()
  {
    $json = $this->Crud->fetchOneWhere('settings',['setting_name'=>'page_block'])['json'];
    return json_decode($json,true);
  }

}
