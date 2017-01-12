
<?php

class ledger_model extends CI_Model 
{	

	function save_details($varLedType,$varLedName,$varLedNum,$varDescri)
	{
		$this->load->database();		
		$data = array('ledger_type'=>$varLedType,
						'ledger_no'=>$varLedNum,
						'ledger_name'=>$varLedName,
						'description'=>$varDescri,
		);
		
		
		$this->db->insert("ledger",$data);
		$this->db->close();			
	}

		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("ledger");
		 return $query->result(); 
		$this->db->close();					
	}
	function delete_details()
	{
		$this->load->database();
		
		
	}
	function update_details()
	{
		$this->load->database();
	}
}	
  ?>