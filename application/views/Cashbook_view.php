
<?php	
		
		if($this->input->post("formSubmit3")== "Save") 
			{
				$errorMessage = "";
				
				
				$varid = $this->input->post("id");
				$varpass_no = $this->input->post("pass_no");
				$vardrive_no =$this->input->post("drive_no");
				$varpan= $this->input->post("pan");
				$varadhaar = $this->input->post("adhaar");
				$varmobile =$this->input->post("mobile");
				$varemail =$this->input->post("email");
				$varlang = $this->input->post("lang");
					$varhaj=$this->input->post("haj");
				$varpsc =$this->input->post("psc");
			
				$varcomp =$this->input->post("comp");


				if(empty($errorMessage)) 
				{				
				
					$this->Casbook1_model->save_memdetails($varid,
				$varpass_no,$vardrive_no,$varpan,$varadhaar,$varmobile,$varemail,$varlang,$varpsc,$varhaj,$varcomp);
				
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
<title>Cashbook</title>
<style type="text/css">

rec{
	float : left;
	margin-top: 20px;
	margin-left: 20px;
	width : 500px;
	height: 510px;
	background-color: #99F;
	border: 1px solid;
	border-color: #000;
	text-align: start;
	}
table {
	margin-left:auto;
	width:700px;
	background-color: #FFF;
	font-family: arial, sans-serif;
	border-collapse: collapse;
    }

td, th {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
	//background-color: #6CF;
	background-color: #99F;
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
		#id1 {
	margin-left:99px;
	}
#id2 {
	margin-left:90px;
	}
#id3 {
	margin-left:109px;
	}
#id4 {
	margin-left:54px;
	}
#id5 {
	margin-left:36px;
	}
#id6 {
	margin-left:79px;
	}
#id7 {
	margin-left:70px;
	}
#id8 {
	margin-left:66px;
	}
#id9 {
	margin-left:62px;
	}
#id10 {
	margin-left:41px;
	}
#id11 {
	margin-left:41px;
	}

	</style>	
</head>
<body>
<div id="container">
<header>
  <h1>   MAHALLU MANAGEMENT</h1>
</header>
            
            <div id="titleBar">  </div>   
   <rec>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <h2 align="center">Card Details</h2>
       <p class="id">
        <label for="id.">Identity card No. </label>
    <input name="id1" type="text" size="40" maxlength="100" required />
</p>
<p>
  <label for="Pass_no">Passport No.</label>
	
							
	<input name="id2" type="text" size="40" maxlength="100"/>
</p>
<p>
        <label for="drive_no">Driving License No.</label>
	<input name="id3" type="text" size="40" maxlength="100"/>
</p>

<p>
        <label for="pan">Pan Card No.</label>
	<input name="id4" type="text" size="40" maxlength="100"/>
</p>
<p>
        <label for="adhaaar">Adhaar No</label>
	

			<input name="id5" type="text" size="40" maxlength="100" required/>			
	
</p>
<p>
        <label for="mobile">Mobile</label>
	<input name="id6" type="text" size="40" maxlength="100"/>
</p>
<p>
        <label for="email">Email</label>
	<input name="id7" type="text" size="40" maxlength="100"/>
</p>
<p>
        <label for="lang">Languages Known</label> 
 
        <input name="id8" type="text" size="40" maxlength="100"/>
</p>
                        
                         
          
</p>
<p>
  <label for="psc">PSC</label>
  <select name="id9">
                            <option valu="">/option>
                            <option value="">Colony</option>
                            <option value="">Rent</option>
                           
    </select>
</p>
<p>
        <label for="haj">Hajj Details</label>
	<input name="id10" type="text" size="40" maxlength="100"/>
</p>
<p>
        <label for="comp">Computer Knowledge</label>
	<input name="id11" type="text" size="40" maxlength="100"/>
</p>

  <input name="formSubmit3" type="submit" value="Save">
<input type="reset" value="Reset">
</form>
</rec>
</center>
</body>
</html>