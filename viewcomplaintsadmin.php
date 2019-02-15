<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="409" border="1">
    <tr>
      <td colspan="5"><div align="center">VIEW COMPLAINTS</div></td>
    </tr>
    <tr>
      <td width="46">SL.NO</td>
      <td width="92">COMPLAINT</td>
      <td width="46">NAME</td>
      <td width="41">DATE</td>
      <td width="59">&nbsp;</td>
    </tr>
    <tr>
     <?PHP
	
	$res=mysql_query("SELECT `complaints`.*,staff.`first_name`,staff.`last_name` FROM complaints,staff WHERE staff.`login_id`=complaints.`staff_id` ");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td><?php echo $i?>;</td>
      <td><?php echo $row['complaints'] ?></td>
      <td><?php echo $row['first_name']." ".$row['last_name'] ?></td>
      <td><?php echo $row['complaint_date'] ?></td>
      <td><a href="#">REPLY</a></td>
      
    </tr>
    <?php }}?>
  </table>
</form>
</body>
</html>