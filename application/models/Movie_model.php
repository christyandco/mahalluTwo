<?php

class Movie_model extends CI_Model 
{	
// function: PrepSQL()
		// use stripslashes and mysql_real_escape_string PHP functions
			// to sanitize a string for use in an SQL query
			//
			// also puts single quotes around the string
			
	/*function PrepSQL($value)
	{
		// Stripslashes
		if(get_magic_quotes_gpc()) 
		{
				$value = stripslashes($value);
		}

		// Quote
		$value = "'" . mysql_real_escape_string($value) . "'";

		return($value);
	}*/
	function save_details($varHead,$varHeadparent,$varHname,$intMhouseno,$intHouseno,$intWard,$varVillage,$varPMC,$intPhone,$varStreet,$varCity,$varPost,$intPin,$varDistrict,$intEmployno,$intAincome,$intRationno)
	{
		$this->load->database();
		
		$data = array(
		'head_family' =>$varHead,
		'father_mother' =>$varHeadparent,
		'house_name' =>$varHname,
		'mhouse_no' =>$intMhouseno,
		'house_no' =>$intHouseno,
		'ward' =>$intWard,
		'vilage' =>$varVillage,
		'panchayat_muncipality_corporation' =>$varPMC,
		'phone' =>$intPhone,
		'street' =>$varStreet,
		'city' =>$varCity,
		'post' =>$varPost,
		'pin' =>$intPin,
		'district' =>$varDistrict,
		'employees' =>$intEmployno,
		'annual_income' =>$intAincome,
		'rationcard_no' =>$intRationno,
	
		);
		$this->db->insert("home_basic", $data);
		$this->db->close();
		//$this->load->view('Table_view');
		
	}
function submit_details($varHome,$varHtype,$varAllowance,$varAfrom,$varOtherdetail,$varTomahal,$varInformer,$varCollector,$varElectricity,$varGas,$varWell,$varPtap,$varTelephone,$varWatersupply,$varPwell,$varCellphone,$varComputer,$varInternet,$varRadio,$varTV,$varCable,$varFridge,$varWmachine,$varAC,$varOr,$varBicycle,$varTwow,$varThreew,$varFourw,$varLorry,$varBus,$varOther1,$varCoconut,$varArecanut,$varRubber,$varPaddy,$varVeg,$varFlower,$varFish,$varHbee,$varSilkw,$varHen,$varGoat,$varCow,$varOther2)
	{
		$this->load->database();
		
		$data1 = array(
		'home' =>$varHome,
		'home_status' =>$varHtype,
		'allowance' =>$varAllowance,
		'allowance_from' =>$varAfrom,
		'other_family_details' =>$varOtherdetail,
		'infrmn_to_mahallu' =>$varTomahal,
		'informer' =>$varInformer,
		'collector' =>$varCollector,
		);
		$data2 = array(
		'electricity' =>$varElectricity,
		'gas' =>$varGas,
		'well' =>$varWell,
		'publictap' =>$varPtap,
		'telephone' =>$varTelephone,
		'watersupply' =>$varWatersupply,
		'publicwell' =>$varPwell,
		'mobile' =>$varCellphone,
		'computer' =>$varComputer,
		'internet' =>$varInternet,
		'radio' =>$varRadio,
		'television' =>$varTV,
		'cable' =>$varCable,
		'fridge' =>$varFridge,
		'washing_machine' =>$varWmachine,
		'AC' =>$varAC,
		'others' =>$varOr,
		);
		$data3 = array(
		'bicycle' =>$varBicycle,
		'two_wheeler' =>$varTwow,
		'three_wheeler' =>$varThreew,
		'four_wheeler' =>$varFourw,
		'lorry' =>$varLorry,
		'bus' =>$varBus,
		'others' =>$varOther1,
		);
		$data4 = array(
		'coconut_tree' =>$varCoconut,
		'arecanut' =>$varArecanut,
		'rubber' =>$varRubber,
		'paddy' =>$varPaddy,
		'vegetable' =>$varVeg,
		'flower' =>$varFlower,
		'fish' =>$varFish,
		'honey_bee' =>$varHbee,
		'silkworm' =>$varSilkw,
		'hen' =>$varHen,
		'goat' =>$varGoat,
		'cow' =>$varCow,
		'others' =>$varOther2,
		);
		$this->db->insert("basic_info", $data1);
		$this->db->insert("other_facilities", $data2);
		$this->db->insert("vehicles", $data3);
		$this->db->insert("agri_infrmn", $data4);
		
		$this->db->close();
		
	}
		
	
	
	function get_details()
	{
		
		$this->load->database();				
		 $query=$this->db->get("home_basic");
		 return $query->result(); 
		$this->db->close();
							
	}
}	
?>