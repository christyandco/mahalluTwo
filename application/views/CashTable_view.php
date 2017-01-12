
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
					$this->Casbook1_model->delete_memdetails($varmem_id);
				}
			
		}
		if($this->input->post("formEdit")== "Edit")
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
			$datas['result'] =$this->Casbook1_model->edit($varmem_id);
		//	$this->load->view('CashEdit_view',$datas);
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
	margin-top:550px;
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
<body class="main">
<form action="<?php echo site_url('Cash_controller/back'); ?>" method="post" name="card"><br/>
<table>
 <tr>
 
    <th width="5%"  colspan="2">Sd No..</th>
    <th width="5%">Identity Card No.</th>
    <th width="5%"><p>Passport No.</p></th>
    <th width="5%">Driving License</th>
    <th width="5%">Pan Card No.</th>
    <th width="5%">Adhaar No.</th>
    <th width="5%">Mobile</th>
    <th width="5%">Email</th>
     <th width="5%">Languages Known</th>
    <th width="10%">Hajj Details</th>
    <th width="10%">Psc</th>
    <th width="10%">Computer Knowledge</th>
     <th width="10%">Action</th>
  </tr>

<?php foreach($query as $row):?>
<tr>   
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->mem_id; ?>"><?php echo $row->mem_id; ?></td>
    
    
     
	
    
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->pass_no; ?></td>
    <td><?php echo $row->drive_no; ?></td>
    <td><?php echo $row->pan; ?></td>
    <td><?php echo $row->adhaar; ?></td>
    <td><?php echo $row->mobile; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><?php echo $row->lang; ?></td>
     <td><?php echo $row->haj; ?></td>
    <td><?php echo $row->psc; ?></td>
    <td><?php echo $row->comp; ?></td>
         <td><a href="<?php echo site_url('Cash_controller/deleterow1/'.$row->mem_id); ?>">Delete</a> <a href="<?php echo site_url('Cash_controller/editrow1/'.$row->mem_id); ?>">Edit</a></td>

</tr>
<?php endforeach; ?>
</table>

<input name="formSubmit3" type="submit" value="submit" >

<form>

</body>
</html>