
<?php	
		
		if($this->input->post("formSubmit2")== "Save") 
			{
				$errorMessage = "";
				
				if(empty($this->input->post("name"))) 
				{
					$errorMessage .= "<li>You forgot to enter name!</li>";
				}				
				if(empty($this->input->post("m_f"))) 
				{
					$errorMessage .= "<li>You forgot to enter the gender!</li>";
				}
				if(empty($this->input->post("age"))) 
				{
					$errorMessage .= "<li>You forgot to enter age!</li>";
				}
				if(empty($this->input->post("relation"))) 
				{
					$errorMessage .= "<li>You forgot to enter the relation.!</li>";
				}				
				if(empty($this->input->post("m_s"))) 
				{
					$errorMessage .= "<li>You forgot to enter your marrital status!</li>";
				}
				
				
				
				$varname = $this->input->post("name");
				$varm_f = $this->input->post("m_f");
				$varage =$this->input->post("age");
				$varrelation= $this->input->post("relation");
				$varm_s = $this->input->post("m_s");
				$varchildren =$this->input->post("children");
				$varedu =$this->input->post("edu");
				$varif_study= $this->input->post("if_study");
				$varjob =$this->input->post("job");
				$varworking =$this->input->post("working");
				$varmnth_wage = $this->input->post("mnth_wage");
					$varunemploye=$this->input->post("unemploye");
				$varhealth =$this->input->post("health");
				$varpatient =$this->input->post("patient");
				$varb_grp =$this->input->post("b_grp");
				$varhobby = $this->input->post("hobby");
				//	$varhabits=$this->input->post("habits");
				$varsocial_act =$this->input->post("social_act");
			     $varaim =$this->input->post("aim");
                 $varrem =$this->input->post("rem");


				if(empty($errorMessage)) 
				{				
				
					$this->Casbook1_model->save_details($varname,$varm_f ,$varage,$varrelation,$varm_s,$varchildren,$varedu,$varif_study,$varjob,$varworking,$varmnth_wage,$varunemploye,$varhealth,$varpatient,$varb_grp,$varhobby,$varsocial_act,$varaim,$varrem);
				
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
	.head {
	color: #00F;
}
.head {
	text-align: center;
}
.head {
	font-weight: bold;
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
#id12 {
	margin-left:48px;
	}
#id13 {
	margin-left:94px;
	}
#id14 {
	margin-left:93px;
	}
#id15 {
	margin-left:53px;
	}
#id16 {
	margin-left:94px;
	}
#id17 {
	margin-left:31px;
	}
#id18 {
	margin-left:109px;
	}
#id19 {
	margin-left:80px;
	}
</style>	
</head>
<body>
	<div id="container">
<header>
  <h1>   MAHALLU MANAGEMENT</h1>
</header>
            
            <div id="titleBar">Family Member details </div>
<rec>
<form action="<?php echo site_url('Cash_controller/trial'); ?>" method="post" name="basic"><br/>
        
      <p>
        <label for="name">Name </label>
    <input id="id1" name="name"  type="text" >
</p>
<p>
  <label for="m_f">Gender</label>
  <select id="id2" name="m_f">
  <option value="select">select</option>
                            
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                           
    </select>
    
</p>
<p>
        <label for="age">Age</label>
	<input id="id3" name="age" type="text" />
</p>

<p>
        <label for="relation">Relationship</label>
	<input id="id4" name="relation" type="text" />
</p>
<p>
        <label for="m_s">Marital Status</label>&nbsp;&nbsp;
	

	  <input id="id5" name="m_s" type="text" />			
	
</p>
<p>
        <label for="children">Children</label>
	<input id="id6" name="children" type="text" />
</p>
<p>
        <label for="edu">Education</label>
	<input id="id7" name="edu" type="text" />
</p>
<p>
        <label for="if_study">If studying</label> 
 
        <input id="id8" name="if_study" type="text" />
</p>
                        
     <p>
        <label for="job">Occupation</label>
	<input id="id9" name="job" type="text" />
</p>
 <p>
        <label for="working">Working Place</label>
	<input id="id10" name="working" type="text" />
</p>
<p>
        <label for="mnth_wage">Monthly Wage</label>
	<input id="id11" name="mnth_wage" type="text" />
</p>
<p>
        <label for="unemploye">If Unemloyee</label>
	<input id="id12" name="unemploye" type="text" />
</p>
<p>
        <label for="health">Health</label>
	<input id="id13" name="health" type="text" />
</p>
<p>
        <label for="patient">Patient</label>
	<input id="id14" name="patient" type="text" />
</p>
<p>
        <label for="b_grp">Blood Group</label>
	<input id="id15" name="b_grp" type="text" />
</p>
<p>
        <label for="hobby">Hobby</label>
	<input id="id16" name="hobby" type="text" />
</p>
<p>
        <label for="social_act">Social Activities</label>
	<input id="id17" name="social_act" type="text" />
</p>
<p>
        <label for="aim">Aim</label>
	<input id="id18" name="aim" type="text" />
</p>
<p>
        <label for="rem">Remarks</label>
	<input id="id19" name="rem" type="text" />
</p>
		  <input name="formSubmit2" type="submit" value="Save">
<input type="reset" value="Reset">
</form>
</rec>
</center>
</body>
</html>