
<?php

class Casbook1_model extends CI_Model 
{	

	function save_details($varname,$varm_f ,$varage,$varrelation,$varm_s,$varchildren,$varedu,$varif_study,$varjob,$varworking,$varmnth_wage,$varunemploye,$varhealth,$varpatient,$varb_grp,$varhobby,$varsocial_act,$varaim,$varrem)
	{
		$this->load->database();		
		$data = array('name'=>$varname,
						'm_f'=>$varm_f,
						'age'=>$varage,
						'relation'=>$varrelation,
						'm_s'=>$varm_s,
						'children'=>$varchildren,
						'edu'=>$varedu,
						'if_study'=>$varif_study,
						'job'=>$varjob,
						'working'=>$varworking,
						'mnth_wage'=>$varmnth_wage,
						'unemploye'=>$varunemploye,
						'health'=>$varhealth,
						'patient'=>$varpatient,
						'b_grp'=>$varb_grp,
						'hobby'=>$varhobby,
						
						'social_act'=>$varsocial_act,
						'aim'=>$varaim,
						'rem'=>$varrem,
		);
		
		
		
		$this->db->insert("family_details",$data);
		
		$this->db->close();			
	}

		
	
	
	function get_details()
	{		
		$this->load->database();				
		 $query=$this->db->get("family_details");
		 return $query->result(); 
		$this->db->close();					
	}
	function get_memdetails()
	{		
		$this->load->database();				
		 $query=$this->db->get("membe_details");
		 return $query->result(); 
		$this->db->close();					
	}

	function delete_details($varf_id)
	{
		$this->load->database();
		foreach($varf_id as $rw)
		{
			$this->db->delete("family_details", "f_id = $rw");
			$this->db->close();
			
		}
		
	}
	function delete($var)
	{
			$this->load->database();
			$this->db->delete("family_details", "f_id = $var");
			$this->db->close();
	}
	function edit($var)
	{
		$this->load->database();
		$result = $this->db->get_where("family_details","f_id = $var");
		return $result->result(); 	   
		$this->db->close();						
	}
	function delete_memdetails($varmem_id)
	{
		$this->load->database();
		foreach($varmem_id as $rw)
		{
			$this->db->delete("membe_details", "mem_id = $rw");
			$this->db->close();
			
		}
		
	}
	function delete1($var)
	{
			$this->load->database();
			$this->db->delete("membe_details", "mem_id = $var");
			$this->db->close();
	}
	function edit1($var)
	{
		$this->load->database();
		$result = $this->db->get_where("membe_details","mem_id = $var");
		return $result->result(); 	   
		$this->db->close();						
	}
	
	function save_memdetails($varid,
				$varpass_no,$vardrive_no,$varpan,$varadhaar,$varmobile,$varemail,$varlang,$varpsc,$varhaj,$varcomp)
	{
		$this->load->database();		
		$data1 = array('id'=>$varid,
						'pass_no'=>$varpass_no,
						'drive_no'=>$vardrive_no,
						'pan'=>$varpan,
						'adhaar'=>$varadhaar,
						'mobile'=>$varmobile,
						'email' =>$varemail,
						'lang'=>$varlang,
						'haj'=>$varhaj,
						'psc'=>$varpsc,
						'comp'=>$varcomp,
		);
		
		
		
		
		$this->db->insert("membe_details",$data1);
		
		
		$this->db->close();			
	}

	
	
}	
  ?>