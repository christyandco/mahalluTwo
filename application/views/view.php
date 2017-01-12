<?php	
		
		if($this->input->post("formSubmit")== "Submit") 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("formHead"))) 
				{
					$errorMessage .= "<li>You forgot to enter a head_family!</li>";
				}
				
				
				if(empty($this->input->post("formHeadparent"))) 
				{
					$errorMessage .= "<li>You forgot to enter a father_mother!</li>";
				}
				if(empty($this->input->post("formHname"))) 
				{
					$errorMessage .= "<li>You forgot to select your house_name!</li>";
				}
                                if(empty($this->input->post("formMhouseno"))) 
				{
					$errorMessage .= "<li>You forgot to select your mhouse_no!</li>";
				}
                                if(empty($this->input->post("formHouseno"))) 
				{
					$errorMessage .= "<li>You forgot to select your house_no!</li>";
				}
                                if(empty($this->input->post("formWard"))) 
				{
					$errorMessage .= "<li>You forgot to select your ward!</li>";
				}
                                if(empty($this->input->post("formVillage"))) 
				{
					$errorMessage .= "<li>You forgot to select your vilage!</li>";
				}
                                if(empty($this->input->post("formPMC"))) 
				{
					$errorMessage .= "<li>You forgot to select your panchayat_muncipality_corporation!</li>";
				}
                                if(empty($this->input->post("formPhone"))) 
				{
					$errorMessage .= "<li>You forgot to select your phone!</li>";
				}
                                if(empty($this->input->post("formStreet"))) 
				{
					$errorMessage .= "<li>You forgot to select your street!</li>";
				}
                                if(empty($this->input->post("formCity"))) 
				{
					$errorMessage .= "<li>You forgot to select your city!</li>";
				}
                                if(empty($this->input->post("formPost"))) 
				{
					$errorMessage .= "<li>You forgot to select your post!</li>";
				}
                                if(empty($this->input->post("formPin"))) 
				{
					$errorMessage .= "<li>You forgot to select your pin!</li>";
				}
                                if(empty($this->input->post("formDistrict")))
				{
					$errorMessage .= "<li>You forgot to select your district!</li>";
				}
                                if(empty($this->input->post("formEmployno"))) 
				{
					$errorMessage .= "<li>You forgot to select your employees!</li>";
				}
                                if(empty($this->input->post("formAincome"))) 
				{
					$errorMessage .= "<li>You forgot to select your annual_income!</li>";
				}
                                if(empty($this->input->post("formRationno"))) 
				{
					$errorMessage .= "<li>You forgot to select your rationcard_no!</li>";
				}
				$varHead = $this->input->post("formHead");
				$varHeadparent = $this->input->post("formHeadparent");
                $varHname = $this->input->post("formHname");
				$intMhouseno =$this->input->post("formMhouseno");
                $intHouseno = $this->input->post("formHouseno");
                $intWard = $this->input->post("formWard");
                $varVillage = $this->input->post("formVillage");
                $varPMC = $this->input->post("formPMC");
                $intPhone = $this->input->post("formPhone");
                $varStreet = $this->input->post("formStreet");
                $varCity = $this->input->post("formCity");
                $varPost = $this->input->post("formPost");
                $intPin = $this->input->post("formPin");
                $varDistrict = $this->input->post("formDistrict");
                $intEmployno = $this->input->post("formEmployno");
                $intAincome = $this->input->post("formAincome");
                $intRationno = $this->input->post("formRationno");
				if(empty($errorMessage)) 
				{				
				//$this->load->model('Movie_model'); # <- add this
				$this->Movie_model->save_details($varHead,$varHeadparent,$varHname,$intMhouseno,$intHouseno,$intWard,$varVillage,$varPMC,$intPhone,$varStreet,$varCity,$varPost,$intPin,$varDistrict,$intEmployno,$intAincome,$intRationno);
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
	height: 500px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
        }
        header {
	color: #999;
	background-color: #039;
	height: 100px;
	width: 1024px;
        padding-top: 25px;
        }
        #titleBar {
	height: 50px;
	width: 1024px;
	background-color: #99F;
        color: #F06;
        font-size: x-large;
        text-align: center;
	padding-top: 15px;
        }
        
        #main {
	height: 25px;
	width: 1024px;
	background-color: #99F;
        color: #F06;
        font-size: large;
	padding-top: 10px;
        }
	</style>	
</head>
<body>
	<div id="container">
<header>
  <h1>   MAHALLU MANAGEMENT</h1>
</header>
            
            <div id="titleBar">Mahallu Data Survey</div>
          	<form action="<?php echo site_url('Cash_controller/survey1'); ?>" method="post" name="basic"><br/>
            
                            <label for='formHead'>Head of the family*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formHead" maxlength="50" value="" size='40' required/>
                            &nbsp;&nbsp;
                            
                            <label for='formHeadparent'>Name of father / mother*:</label>
                            &nbsp;&nbsp;
			    <input type="text" name="formHeadparent" maxlength="50" value="" size='35'required />
                            
                            <p>
                            <label for='formHname'>House name*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formHname" maxlength="50" value="" size='35'required/>
                            &nbsp;&nbsp;
                           
                            <label for='formMhouseno'>Mahallu house no*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formMhouseno" maxlength="50" value="" size="15" required/>
                           &nbsp;&nbsp;
                           
                            <label for='formHouseno'>House no*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formHouseno" maxlength="50" value="" size="15" required/>
                            
                            </p>
                            
                            <p>
                            <label for='formWard'>Ward*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formWard" value="" size="13" required />
                            &nbsp;&nbsp;
                            
                            <label for='formVillage'>Village*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formVillage" value="" size="20" required/>
                            &nbsp;&nbsp;
                            
                            <label for='formPMC'>Panchayat/Muncipality/Corporation*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formPMC" value="" size="20"required />
                   
                        </p>
                        <p>
                            <label for='formPhone'>Phone no*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formPhone" value="" size="30"required />
                            &nbsp;&nbsp;
                            
                            <label for='formStreet'>Street*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formStreet" value="" size="15"required />
                            &nbsp;&nbsp;
                            
                            <label for='formCity'>City*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formCity" value="" size="20"required />
                            &nbsp;&nbsp;
                            
                            <label for='formPost'>Post*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formPost" value="" size="17" required/>
                            
                        </p> 
                        
                        <p>
                            <label for='formPin'>Pin*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formPin" value="" size="25"required />
                            &nbsp;&nbsp;
                            
                            <label for='formDistrict'>District*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formDistrict" value="" size="25" required/>
                            &nbsp;&nbsp;
                            
                            <label for='formEmployno'>Number of employee's(in family)*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formEmployno" value="" size="12" required/>
                            
                            
                        </p>
                            
                        <p>
                            <label for='formAincome'>Annual income*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formAincome" value="" size="15" required/>
                            &nbsp;&nbsp;
                            
                            <label for='formRationno'>Ration card no*:</label>
                            &nbsp;&nbsp;
                            <input type="text" name="formRationno" value="" size="15"required />
                            &nbsp;&nbsp;
                        </p>
                      
                            
                            <input type="submit" name="formSubmit" value="Submit"/>
                            
      </form>
</div>
</body>
</html>  
  