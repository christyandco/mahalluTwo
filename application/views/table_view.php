<?php	
		
		if($this->input->post("formSubmit1")== "Save") 
			{
				$errorMessage = "";
				
				
				if($this->input->post("formElectricity")=='formElectricity') 
				{
					$varElectricity='yes';
				}
				else
				{
					$varElectricity='No';
				}
				if($this->input->post("formGas")=='formGas') 
				{
					$varGas='yes';
				}
				else
				{
					$varGas='No';
				}
				if($this->input->post("formWell")=='formWell') 
				{
					$varWell='yes';
				}
				else
				{
					$varWell='No';
				}
				if($this->input->post("formPtap")=='formPtap') 
				{
					$varPtap='yes';
				}
				else
				{
					$varPtap='No';
				}
				if($this->input->post("formTelephone")=='formTelephone') 
				{
					$varTelephone='yes';
				}
				else
				{
					$varTelephone='No';
				}
				if($this->input->post("formWatersupply")=='formWatersupply') 
				{
					$varWatersupply='yes';
				}
				else
				{
					$varWatersupply='No';
				}
				if($this->input->post("formPwell")=='formPwell') 
				{
					$varPwell='yes';
				}
				else
				{
					$varPwell='No';
				}
				if($this->input->post("formCellphone")=='formCellphone') 
				{
					$varCellphone='yes';
				}
				else
				{
					$varCellphone='No';
				}
				if($this->input->post("formComputer")=='formComputer') 
				{
					$varComputer='yes';
				}
				else
				{
					$varComputer='No';
				}
				if($this->input->post("formInternet")=='formInternet') 
				{
					$varInternet='yes';
				}
				else
				{
					$varInternet='No';
				}
				if($this->input->post("formRadio")=='formRadio') 
				{
					$varRadio='yes';
				}
				else
				{
					$varRadio='No';
				}
				if($this->input->post("formTV")=='formTV') 
				{
					$varTV='yes';
				}
				else
				{
					$varTV='No';
				}
				if($this->input->post("formCable")=='formCable') 
				{
					$varCable='yes';
				}
				else
				{
					$varCable='No';
				}
				if($this->input->post("formFridge")=='formFridge') 
				{
					$varFridge='yes';
				}
				else
				{
					$varFridge='No';
				}
				if($this->input->post("formWmachine")=='formWmachine') 
				{
					$varWmachine='yes';
				}
				else
				{
					$varWmachine='No';
				}
				if($this->input->post("formAC")=='formAC') 
				{
					$varAC='yes';
				}
				else
				{
					$varAC='No';
				}
				if($this->input->post("formOr")=='formOr') 
				{
					$varOr='yes';
				}
				else
				{
					$varOr='No';
				}
				if($this->input->post("formBicycle")=='formBicycle') 
				{
					$varBicycle='yes';
				}
				else
				{
					$varBicycle='No';
				}
				if($this->input->post("formTwow")=='formTwow') 
				{
					$varTwow='yes';
				}
				else
				{
					$varTwow='No';
				}
				if($this->input->post("formThreew")=='formThreew') 
				{
					$varThreew='yes';
				}
				else
				{
					$varThreew='No';
				}
				if($this->input->post("formFourw")=='formFourw') 
				{
					$varFourw='yes';
				}
				else
				{
					$varFourw='No';
				}
				if($this->input->post("formLorry")=='formLorry') 
				{
					$varLorry='yes';
				}
				else
				{
					$varLorry='No';
				}
				if($this->input->post("formBus")=='formBus') 
				{
					$varBus='yes';
				}
				else
				{
					$varBus='No';
				}
				if($this->input->post("formOther1")=='formOther1') 
				{
					$varOther1='yes';
				}
				else
				{
					$varOther1='No';
				}
				if($this->input->post("formCoconut")=='formCoconut') 
				{
					$varCoconut='yes';
				}
				else
				{
					$varCoconut='No';
				}
				if($this->input->post("formArecanut")=='formArecanut') 
				{
					$varArecanut='yes';
				}
				else
				{
					$varArecanut='No';
				}
				if($this->input->post("formRubber")=='formRubber') 
				{
					$varRubber='yes';
				}
				else
				{
					$varRubber='No';
				}
				if($this->input->post("formPaddy")=='formPaddy') 
				{
					$varPaddy='yes';
				}
				else
				{
					$varPaddy='No';
				}
				if($this->input->post("formVeg")=='formVeg') 
				{
					$varVeg='yes';
				}
				else
				{
					$varVeg='No';
				}
				if($this->input->post("formFlower")=='formFlower') 
				{
					$varFlower='yes';
				}
				else
				{
					$varFlower='No';
				}
				if($this->input->post("formFish")=='formFish') 
				{
					$varFish='yes';
				}
				else
				{
					$varFish='No';
				}
				if($this->input->post("formHbee")=='formHbee') 
				{
					$varHbee='yes';
				}
				else
				{
					$varHbee='No';
				}
				if($this->input->post("formSilkw")=='formSilkw') 
				{
					$varSilkw='yes';
				}
				else
				{
					$varSilkw='No';
				}
				if($this->input->post("formHen")=='formHen') 
				{
					$varHen='yes';
				}
				else
				{
					$varHen='No';
				}
				if($this->input->post("formGoat")=='formGoat') 
				{
					$varGoat='yes';
				}
				else
				{
					$varGoat='No';
				}
				if($this->input->post("formCow")=='formCow"') 
				{
					$varCow='yes';
				}
				else
				{
					$varCow='No';
				}
				if($this->input->post("formOther2")=='formOther2') 
				{
					$varOther2='yes';
				}
				else
				{
					$varOther2='No';
				}
				$varHome = $this->input->post("formHome");
				$varHtype = $this->input->post("formHtype");
				$varAllowance =$this->input->post("formAllowance");
				$varAfrom =$this->input->post("formAfrom");
				$varOtherdetail =$this->input->post("formOtherdetail");
				$varTomahal =$this->input->post("formTomahal");
				$varInformer =$this->input->post("formInformer");
				$varCollector =$this->input->post("formCollector");
				
				
				if(empty($errorMessage)) 
				{				
				//$this->load->model('Movie_model'); # <- add this
				$this->Movie_model->submit_details($varHome,$varHtype,$varAllowance,$varAfrom,$varOtherdetail,$varTomahal,$varInformer,$varCollector,$varElectricity,$varGas,$varWell,$varPtap,$varTelephone,$varWatersupply,$varPwell,$varCellphone,$varComputer,$varInternet,$varRadio,$varTV,$varCable,$varFridge,$varWmachine,$varAC,$varOr,$varBicycle,$varTwow,$varThreew,$varFourw,$varLorry,$varBus,$varOther1,$varCoconut,$varArecanut,$varRubber,$varPaddy,$varVeg,$varFlower,$varFish,$varHbee,$varSilkw,$varHen,$varGoat,$varCow,$varOther2);
				}
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
			}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
	<title>movie example</title>
	<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 24px; 
	}
	#container {
	height: 768px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
        }
	
	 #main {
	height: 25px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
	background-color: #99F;
        color: #F06;
        font-size: large;
	padding-top: 10px;
	 }

	</style>	
</head>
<body>
<div id="container">
      <div id="main">Basic Details</div>
     
                           
                      <form action="<?php echo site_url('Cash_controller/trial'); ?>" method="post" name="basic"><br/>
                        <label for='formHome'>Home*:</label>
                        &nbsp;&nbsp;
                        <select name="formHome"required>
                         <option value="select">Select</option>
                            <option valu="Yourown">Yourown</option>
                            <option value="Colony">Colony</option>
                            <option value="Rent">Rent</option>
                            <option value="Unclaimed land">Unclaimed land</option>
                            <option value="Other">Other</option>
                        </select> 
                        
                        &nbsp;&nbsp;
                        <label for='formHtype'>Home type*:</label>
                       &nbsp;&nbsp;
                        <select name="formHtype">
                        <option value="select1">Select</option>
                            <option value="Hut">Hut</option>
                            <option value="Rooftile">Rooftile</option>
                            <option value="concrete">Concrete</option>
                            <option value="Upstair">Upstair</option>
                            <option value="Other">Other</option>
                        </select> 
                        &nbsp;&nbsp;
                        <label for='formAllowance'>Any allowance*:</label>
                        &nbsp;&nbsp;
                        <select name="formAllowance" required>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                            <option value="Noneed">No need</option>
                        </select> 
                        <p>
                        	<label for='formAfrom'>If yes, from where:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formAfrom" value="" size="30" />
                           
                        </p>
                        
                        <p>
                        	<label for='formOtherdetail'>Other family details:</label>
                            &nbsp;&nbsp;
                            <textarea name="formOtherdetail" cols="" rows=""></textarea>
                        </p>
                        
                        <p>
                        	<label for='formTomahal'>Information to mahallu:</label>
                            &nbsp;&nbsp;
                            <textarea name="formTomahal" cols="" rows=""></textarea>
                        </p>
                        
                        
                        
                         <p>
                        <label for='formOtherfaci'>Other faciliities:</label>
                        <p>
                            <input type="radio" name="formElectricity" value="formElectricity" /><text>Electricity</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formGas" value="formGas" /><text>Gas</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formWell" value="formWell" /><text>Well</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formPtap" value="formPtap" /><text>Publictap</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formTelephone" value="formTelephone" /><text>Telephone</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formWatersupply" value="formWatersupply" /><text>Watersupply</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formPwell" value="formPwell" /><text>Publicwell</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formCellphone" value="formCellphone" /><text>Cellphone</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formComputer" value="formComputer" /><text>Computer</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formInternet" value="formInternet" /><text>Internet</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formRadio" value="formRadio" /><text>Radio</text>
                            <br/>
                            <input type="radio" name="formTV" value="formTV" /><text>Television</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formCable" value="formCable" /><text>Cable</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formFridge" value="formFridge" /><text>Fridge</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formWmachine" value="formWmachine" /><text>Washing machine</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formAC" value="formAC" /><text>AC</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formOr" value="formOr" /><text>Others</text>
                        </p>
                        </p>
                        <p>
                        <label for='formVehicles'>Vehicles:</label>
                        <p>
                            <input type="radio" name="formBicycle" value="formBicycle" /><text>Bicycle</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formTwow" value="formTwow" /><text>Two wheeler</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formThreew" value="formThreew" /><text>Three wheeler</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formFourw" value="formFourw" /><text>Four wheeler</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formLorry" value="formLorry" /><text>Telephone</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formBus" value="formBus" /><text>Bus</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formOther1" value="formOther1" /><text>Others</text>
                          </p>
                          </p>
                          
                          <p>
                        <label for='formAgri'>Agricultural details:</label>
                        <p>
                            <input type="radio" name="formCoconut" value="formCoconut" /><text>Coconut</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formArecanut" value="formArecanut" /><text>Arecanut</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formRubber" value="formRubber" /><text>Rubber</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formPaddy" value="formPaddy" /><text>Paddy</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formVeg" value="formVeg" /><text>Vegetables</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formFlower" value="formFlower" /><text>Flower</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formFish" value="formFish" /><text>Fish</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formHbee" value="formHbee" /><text>Honey bee</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formSilkw" value="formSilkw" /><text>Silkworm</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formHen" value="formHen" /><text>Hen</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formGoat" value="formGoat" /><text>Goat</text>
                            &nbsp;&nbsp;
                            <input type="radio" name="formCow" value="formCow" /><text>Cow</text>
                            <br/>
                            <input type="radio" name="formOther2" value="formOther2" /><text>Others</text>
                          </p>
                          
                          <p>
                        	<label for='formInformer'>Name of informer*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formInformer" value="" size="30" required/>
                            &nbsp;&nbsp;
                            
                            <label for='formCollector'>Name of collector*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formCollector" value="" size="30"required />
                        </p>
                         <input name="formSubmit1" type="submit" value="Save" />

                      </form>
                    <div id="main"></div>  
</body>
</html>