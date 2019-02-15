<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="349" border="1">
    <tr>
      <td colspan="5"><div align="center">VIEW LEAVES</div></td>
    </tr>
    <tr>
      <td width="46">SL.NO</td>
      <td width="46">NAME</td>
      <td width="103">DEPARTMENT</td>
      <td width="40">DATE</td>
      <td width="80">REASON</td>
    </tr>
    <tr>
     <?PHP
	include('connection.php');
	$res=mysql_query("SELECT staff.*,department.*,`examdutymanager`.leave.* FROM staff ,examdutymanager.`leave`,department WHERE `examdutymanager`.leave.`status`='approved'  AND `examdutymanager`.`leave`.`staff_id`=`staff`.`login_id` AND `staff`.`dept_id`=`department`.`dept_id`");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td><?php echo $i?></td>
      <td><?php echo $row['first_name']." ".$row['last_name']?></td>
      <td><?php echo $row['dept_name']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['reason']?></td>
    </tr>
     <?php }} ?>
  </table>
</form>
</body>
</html>