
<?php

class Casbook_model extends CI_Model 
{	

	
		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("membe_details");
		 return $query->result(); 
		$this->db->close();					
	}
	function delete_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rw)
		{
			$this->db->delete("membe_details", "mem_id= $rw");
			$this->db->close();
			
		}
		
	}
	function update_details($varEntry)
	{
		$this->load->database();
		foreach($varEntry as $rws)
		{
			$result = $this->db->get_where("membe_details",array('mem_id'=>$rws));
			   return $result->result(); 	   
								
		}
		$this->db->close();	
		
		
	}
	function save_updates($varid,
				$varpass_no,$vardrive_no,$varpan,$varadhaar,$varmobile,$varemail,$varlang,$varhaj,$varpsc,$varcomp)
	{
		$this->load->database();		
		$data = array('id'=>$varid,
						'pass_no'=>$varpass_no,
						'drive_no'=>$vardeive_no,
						'pan'=>$varpan,
						'adhaar'=>$varadhaar,
						'mobile'=>$varmobile,
						'lang'=>$varlang,
						'haj'=>$varhaj,
						'psc'=>$varpsc,
						'comp'=>$varcomp,
		);
		
		$this->db->set($data); 
		$this->db->where("mem_id", $varNum); 
		$this->db->update("membe_details", $data);
		return ;
		$this->db->close();	
			
	}
	
}	
  ?>