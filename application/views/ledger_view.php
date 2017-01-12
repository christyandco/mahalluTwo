
<?php	
		
		if($this->input->post("formSubmit")== "Save") 
			{
				$errorMessage = "";
				
				
				if(empty($this->input->post("ledType"))) 
				{
					$errorMessage .= "<li>You forgot to select ledger type!</li>";
				}
				if(empty($this->input->post("ledNum"))) 
				{
					$errorMessage .= "<li>You forgot to enter Ledger No.!</li>";
				}				
				if(empty($this->input->post("ledName"))) 
				{
					$errorMessage .= "<li>You forgot to enter Ledger name!</li>";
				}
				if(empty($this->input->post("description"))) 
				{
					$errorMessage .= "<li>You forgot to enter description!</li>";
				}
				
				$varLedType =$this->input->post("ledType");
				$varLedName = $this->input->post("ledName");
				$varLedNum = $this->input->post("ledNum");
				$varDescri =$this->input->post("description");
				
				if(empty($errorMessage)) 
				{				
				
					$this->ledger_model->save_details(				$varLedType,$varLedName,$varLedNum,			 				$varDescri);
				
				}
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
			  
			}
		    
	?>	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ledger</title>
</head>

<body>
<center>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="cashbook">
<table width="75%" border="1">  
  <tr>
    <th width="5%">Entry No.</th>
    
   
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
    
  </tr>

  <tr>
   <?php $i=1; ?>
    <td scope="col"><?php echo $i ; ?></td>
       <td scope="col"><select name="ledType">
    				<option value="Debit">Debit</option>
  					<option value="Credit">Credit</option>
    				</select></td>
    <td scope="col"><input name="ledName" type="text" value=""></td>
    <td scope="col"><input name="ledNum" type="text" value=""></td>
    <td scope="col"><textarea name="description" cols="" rows=""></textarea></td>
    
  </tr>
</table>
<input name="formSubmit" type="submit" value="Save">
</form>
</center>
</body>
</html>