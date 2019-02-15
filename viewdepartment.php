<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="568" border="1">
    <tr>
      <td height="36" colspan="3"><div align="center">VIEW DEPARTMENT</div></td>
    </tr>
    <tr>
      <td width="170"><div align="center">SL.NO</div></td>
      <td width="188"><div align="center">DEPARTMENT</div></td>
      <td width="188"><div align="center">HOD</div></td>
    </tr>
   
    <?PHP
	include("connection.php");
	$res=mysql_query("SELECT department.`dept_name`,staff.`first_name`,staff.`last_name` FROM department,hod,staff WHERE department.`dept_id`=hod.`dept_id` AND `hod`.`login_id`=`staff`.`login_id`");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row['dept_name']?></td>
      <td><?php echo $row['first_name']." " .$row['last_name']?></td>
    </tr>
    <?php
		}}?>
  </table>
</form>
</body>
</html>