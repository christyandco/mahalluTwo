
<?php	
		
		if($this->input->post("checkEdit")== "Edit")
		{
			$this->ledger_model->checkbox();
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

<table width="75%" border="1">
 <tr>
 
    <th width="5%"  colspan="2">Entry No.</th>
    <th width="10%">Ledger Type</th>
    <th width="10%">Ledger Name</th>
    <th width="10%">Ledger No.</th>
    <th width="10%">Description</th>
   
  </tr>

<?php foreach($query as $row): ?>
<tr>   
	 
	<td colspan="2"><input  type="checkbox" name="selectRow[]" value="<?php echo $row->entry_no; ?>"><?php echo $row->entry_no; ?></td>
    
    <td><?php echo $row->ledger_type; ?></td>
    <td><?php echo $row->ledger_name; ?></td>
    <td><?php echo $row->ledger_no; ?></td>
    <td><?php echo $row->description; ?></td>
   </tr>
<?php endforeach; ?>
</table>
<td><button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/under'" name="delete">Delete</button></td>
<td><button onclick="location.href='<?php echo base_url();?>index.php/Cash_controller/under'" name="edit">Edit</button></td>

</center>
</body>
</html>