<?php 
Class Kycs extends ParentController{
	
	/**
	 * [__construct description]
	 */
	function __construct() 
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Kycs_m');
		$this->load->model('Crud');
		$this->isSiteUnderMaintainance();
	}
    
    /**
     * [index description]
     * @return [type] [description] 
     */
	function index()
	{  
		$data['getAllKycs'] = $this->Kycs_m->getAllKycs(null);
	    $this->backend('kyc-list',$data); 	 
	}
    

    /**
     * [view_detail description]
     * @return [type] [description]
     */
    function view_detail($id)
    {
        $data['getUserKycDetail'] = $this->Kycs_m->getUserKycDetail($id);
	    $this->backend('kycs',$data);	
    }
    
    /**
     * [approve description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
	function approve($id)
	{
       $this->Kycs_m->approve($id);
       redirect('backend/kycs');
	}
    
    /**
     * [progress description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
	function progress($id)
	{
		$this->Kycs_m->progress($id);
       redirect('backend/kycs');
	}
    
    /**
     * [missing description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function missing($id)
    {
       $this->Kycs_m->missing($id);
       redirect('backend/kycs');   
    }
    
    /**
     * [reject description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
	function reject($id)
	{
      $this->Kycs_m->reject($id);
       redirect('backend/kycs');
	} 
    
    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
	function delete($id)
	{
		$this->Kycs_m->delete($id);
	    redirect('backend/kycs');
	}
    
    


}
