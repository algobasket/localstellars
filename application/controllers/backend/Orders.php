<?php 
Class Orders extends ParentController{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Orders_m');
	}

	function index()
	{  
		$data['getAllOrders'] = $this->Orders_m->getAllOrders(null);
	    $this->backend('orders',$data);	
	}


	function payments()
	{
		$data['getAllPayments'] = $this->Orders_m->getAllUserTransactions();
		$data['section'] = 'payments';
	    $this->backend('payments',$data);	
	}

 
	function payment_detail()
	{
      $data['getAllPayments'] = $this->Orders_m->getAllUserTransactions();
      $data['section'] = 'payment_detail';
	  $this->backend('payments',$data);	
	}


	function payment_approve($id)
	{
       $this->Crud->update('payment',['id'=>$id],['status'=>1]);
       redirect('backend/orders/payments');
	}


	function payment_pending($id)
	{
      $this->Crud->update('payment',['id'=>$id],['status'=>4]);
      redirect('backend/orders/payments');
	}


	function payment_suspend($id)
	{
      $this->Crud->update('payment',['id'=>$id],['status'=>3]);
      redirect('backend/orders/payments');
	}


	function payment_delete($id)
	{
	  $this->Crud->delete('payment',['id'=>$id]);	
      redirect('backend/orders/payments');
	}
    

	function approve($oid)
	{
       $this->Orders_m->approve($oid);
       redirect('backend/orders');
	}

	function pending($oid)
	{
		$this->Orders_m->pending($oid);
       redirect('backend/orders');
	}
    
    function suspend($oid)
    {
       $this->Orders_m->suspend($oid);
       redirect('backend/orders');   
    }

	function delete($oid)
	{
      $this->Orders_m->delete($oid);
       redirect('backend/orders');
	} 

}
