

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cashbook</title>
</head>

<body>
<center>
<form action="<?php echo site_url('Cash_controller/trial1'); ?>" method="post" name="cashbook">

  <table width="30%" border="1">  
    <tr>
    <th width="5%">Account</th>
     <td scope="col"><select name="accounttype">
    				<option value="Cashbook">Cashbook</option>
  					<option value="Ledger">Leger</option>
                    <option value="Trialbalance">Trial Balance</option>
    				</select></td>
   
 </tr>
</table>
<table width="75%" border="1">  
  <tr>
    
    <th width="10%">Start Date</th>
    
    <th width="10%">End Date</th>
   </tr>

  <tr>
   <?php $i=1; ?>
   
    <td scope="col"><input name="sdate" type="date" value="" required></td>
    <td scope="col"><input name="edate" type="date" value="" required></td>
   </tr>
</table>
<input name="formSubmit" type="submit" value="Go">
</form>
</center>
</body>
</html>