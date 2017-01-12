
<?php	
		
		if($this->input->post("formDelete")== "Delete")
		{
			$errorMessage = "";
			if(empty($this->input->post("selectRow"))) 
				{
					$errorMessage .= "<li>You forgot to Select a row!</li>";
				}	
				if(!empty($errorMessage)) 
				{
			    echo("<p>There was an error with your form:</p>\n");
			    echo("<ul>" . $errorMessage . "</ul>\n");
				}
				if(empty($errorMessage)) 
				{
					foreach($this->input->post('selectRow') as $rows)
					{
						$varEntry=$this->input->post('selectRow');			
					}
					$this->Casbook1_model->delete_details($varf_id);
				}
			
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
<style type="text/css">
table {
	margin-top:25px;
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
    background-color: #dddddd;
}
</style></head>
<body class="title">
<center>
<form action="<?php echo site_url('Cash_controller/trials'); ?>" method="post" name="basic"><br/>
<table width="93%" border="2" >
 <tr>
 
     
    <th width="5%"  colspan="2">Sd No.</th>
    <th width="10%">Name</th>
    <th width="5%">Gender*</th>
    <th width="5%">Age</th>
    <th width="10%">Relationship</th>
    <th width="10%">Marrital Status*</th>
    <th width="5%">Children</th>
    <th width="10%">Education</th>
     <th width="10%">If Studying</th>
    <th width="10%">Occupation*</th>
    <th width="10%">Working Place </th>
    <th width="10%">Monthly Wage</th>
    <th width="10%">Unemployee</th>
     <th width="5%">Health</th>
    
    <th width="10%">Patient</th>
    <th width="5%">Blood Group*</th>
     <th width="5%">Hobby</th>
    
    <th width="10%">Social activities</th>
    <th width="10%">Aim</th>
     <th width="5%">Remarks</th>
      <th width="10%">Action</th>
  </tr>

<?php foreach($query as $row):?>
<tr>   
	 
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->f_id; ?>"><?php echo $row->f_id; ?></td>
    
    
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->m_f; ?></td>
    <td><?php echo $row->age; ?></td>
    <td><?php echo $row->relation; ?></td>
    <td><?php echo $row->m_s; ?></td>
    <td><?php echo $row->children; ?></td>
    <td><?php echo $row->edu; ?></td>
     <td><?php echo $row->if_study; ?></td>
    <td><?php echo $row->job; ?></td>
    <td><?php echo $row->working; ?></td>
    <td><?php echo $row->mnth_wage; ?></td>
     <td><?php echo $row->unemploye; ?></td>
    <td><?php echo $row->health; ?></td><hr>

    <td><?php echo $row->patient; ?></td>
     <td><?php echo $row->b_grp; ?></td>
     <td><?php echo $row->hobby; ?></td>
      
    <td><?php echo $row->social_act; ?></td>
    <td><?php echo $row->aim; ?></td>
     <td><?php echo $row->rem; ?></td>
     <td><a href="<?php echo site_url('Cash_controller/deleterow/'.$row->f_id); ?>">Delete</a> <a href="<?php echo site_url('Cash_controller/editrow/'.$row->f_id); ?>">Edit</a></td>
</tr>
<?php endforeach; ?>
</table>




<input name="formContinue" type="submit" value="Continue" >
<form>

</body>
</html>