<?php 
Class Schedule_events extends ParentController{
    
    /**
     * [__construct description]
     */
	function __construct()
	{
		parent::__construct();
    $this->load->model('Token_m');
	}
  

  function index()
  {  
     $data['section'] = 'list';
     $data['events'] = $this->Token_m->events(null);
     $this->backend('schedule_event',$data);
  }

  /**
   * [create_event description]
   * @return [type] [description]
   */
	function create_event()
	{   
     if($this->input->post('create')) 
     {
        $create = [
          'schedule_name' => $this->input->post('schedule_name'),
          'start_date'    => $this->input->post('start_date') .' '.$this->input->post('start_time'),
          'end_date'      => $this->input->post('end_date') .' '.$this->input->post('end_time'),
          'min_purchase'  => $this->input->post('min_purchase'),
          'asset_distribute' => $this->input->post('asset_distribute'),
          'bonus_percentage' => $this->input->post('bonus_percentage'),
          'created' => date('d-m-Y h:i:s'),
          'updated' => date('d-m-Y h:i:s'),
          'status'  => 2, 
        ];
        //print_r($create);die;
        $this->Crud->create('schedule_events',$create);
        $this->setFlash('<div class="alert alert-success">Schedule Event Created</div>');
        redirect('backend/schedule_events');
     }
     $data['section'] = __FUNCTION__;
	   $this->backend('schedule_event',$data);
	}
  

  /**
   * [update_event description]
   * @return [type] [description]
   */
  function update_event($id)
  {
     if($this->input->post('update'))
     {
        $this->Crud->update('schedule_events',['id' => $id],[
          'schedule_name' => $this->input->post('schedule_name'),
          'start_date'    => $this->input->post('start_date') .' '.$this->input->post('start_time'),
          'end_date'      => $this->input->post('end_date') .' '.$this->input->post('end_time'),
          'min_purchase'  => $this->input->post('min_purchase'),
          'asset_distribute' => $this->input->post('asset_distribute'),
          'bonus_percentage' => $this->input->post('bonus_percentage'),
          'updated' => date('d-m-Y h:i:s'),
          'status'  => 2,
        ]);
        redirect('backend/schedule_events');
        $this->setFlash('<div class="alert alert-success">Schedule Event Updated</div>');
     }
     $data['section'] = __FUNCTION__;
     $data['events'] = $this->Token_m->eventsById($id);   
     $this->backend('schedule_event',$data); 
  } 


  /**
   * [delete_event description]
   * @return [type] [description]
   */
  function delete_event($id)
  {
    $this->Crud->delete('schedule_events',$id);
    $this->setFlash('<div class="alert alert-danger">Schedule Event Deleted</div>');
    redirect('backend/schedule_events');  
  }
  

  /**
   * [updateEventStatus description]
   * @param  string $id     [description]
   * @param  string $status [description]
   * @return [type]         [description]
   */
  function updateEventStatus($id="",$status="")
  {
     $this->Crud->update('schedule_events',['id'=>$id],['status'=>$status]);
     redirect('backend/schedule_events/');
  }


}