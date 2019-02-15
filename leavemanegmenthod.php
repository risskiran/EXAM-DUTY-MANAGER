<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="660" height="134" border="1">
    <tr>
      <td colspan="5"><div align="center">leave managment</div></td>
    </tr>
    <tr>
      <td width="87" height="30"><div align="center">sl.no</div></td>
      <td width="132"><div align="center">name</div></td>
      <td width="96"><div align="center">date</div></td>
      <td width="194"> <div align="center">reason</div></td>
      <td width="117"> status</td>
    </tr>
    <tr>
      <?PHP
	  include('connection.php');
	  
	  
	  session_start();
	  $lid=$_SESSION['lid'];
	  
	
	$res=mysql_query("SELECT staff.`first_name`,staff.`last_name` ,`examdutymanager`.leave.* FROM staff ,examdutymanager.`leave`,department,`hod` WHERE `examdutymanager`.`leave`.`staff_id`=`staff`.`login_id` AND `staff`.`dept_id`=`hod`.`dept_id` AND `hod`.`login_id`='$lid' ");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td height="45"><?php echo $i ?></td>
      <td><?php echo $row['first_name']." ".$row['first_name']?></td>
      <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['reason'] ?></td>
      <td><div align="center"><a href="leave_approve.php?id=<?php echo $row['leave_id']?>">approve </a></div></td>
    </tr>
    <?php 
		}}?>
  </table>
</form>
</body>
</html>