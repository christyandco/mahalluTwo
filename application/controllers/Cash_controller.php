
<?php
class Cash_controller extends CI_Controller {
function Cash_controller()
{
	parent::__construct();
	
	$this->load->helper('url');
	
	$this->load->model('Movie_model');
	$this->load->model('Casbook1_model');
	
	$this->load->model('casbook_model');
	//$this->load->model('Reciept_model');
}
public function index()
{
$this->load->view('Login_view');
}
public function back()
{
	$this->load->view('Front_view');
}
public function login()
{
	if($this->input->post("user")==$this->input->post("password"))
	{
		$this->load->view('Front_view');
	}
	else
	{
		$this->load->view('Login_view');
	}
}

function survey()
	{
		$this->load->view('view');	
		//$data['query'] = $this->Movie_model->get_details();   
		//$this->load->view('table_view', $data);	
	}
	function survey1()
	{
		$this->load->view('Table_view');	
		//$data['query'] = $this->Movie_model->get_details();   
		//$this->load->view('table_view', $data);	
	}
	function trial()
	{
		$this->load->view('Cashbook1_view');
	$data['query'] = $this->Casbook1_model->get_details();
 $this->load->view('CashTable1_view' ,$data);
	}
	function trials()
	{
		$this->load->view('Cashbook_view');
$data['query'] = $this->Casbook1_model->get_memdetails();

$this->load->view('CashTable_view' ,$data)
//$this->load->view('CashTable_view' ,$data1);
;
	}
	public function deleterow($row)
	{
		$this->Casbook1_model->delete($row);	
		$data['query'] = $this->Casbook1_model->get_details();
		$this->load->view('Cashbook1_view');
	 $this->load->view('CashTable1_view',$data );	
	}
	
	public function editrow($row)
	{
		$query['data2']=$this->Casbook1_model->edit($row);	
		$this->load->view('Cashbook1_view',$query);
	//	$this->load->view('Cashbook1_view');
		$data['query'] = $this->Casbook1_model->get_details();
	 	$this->load->view('CashTable1_view' ,$data);
	}
	public function deleterow1($row)
	{
		$this->Casbook1_model->delete1($row);	
		$data['query'] = $this->Casbook1_model->get_memdetails();
		$this->load->view('Cashbook_view');
	 $this->load->view('CashTable_view' ,$data);	
	}
	
	public function editrow1($row)
	{
		$query['data']=$this->Casbook1_model->edit1($row);	
		$this->load->view('Cashbook_view',$query);
		//$this->load->view('Cashbook_view');
		$data['query'] = $this->Casbook1_model->get_memdetails();
	 	$this->load->view('CashTable_view' ,$data);
	}
	
	
	function receipt()
	{
		$this->load->view('view');	
		$data['query'] = $this->Reciept_model->get_details();   
		$this->load->view('table_view_receipt', $data);
	}
	function voucher()
	{
		$this->load->view('view_voucher');	
		$data['query'] = $this->Voucher_model->get_details();   
		$this->load->view('table_view_voucher', $data);
	}
	function under()
	{
	$this->load->view('Construction_view');
	
	}
	function under1()
	{
		$this->load->view('Construction_view');
		$this->load->view('Report_view');
	
	}
	function under2()
	{
		$this->load->view('Construction_view');
		$this->load->view('user_view');
	
	}
}
?>