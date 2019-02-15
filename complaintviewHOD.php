<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("connection.php");?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1">
    <tr>
      <td width="61">sl.no</td>
      <td width="56">date</td>
      <td width="55"><div align="center">name</div></td>
      <td width="147"><div align="center">complaint</div></td>
      <td width="147">&nbsp;</td>
    </tr>
    <tr>
     <?PHP
	
	$res=mysql_query("SELECT complaints.*,staff.`first_name`,staff.`last_name` FROM complaints,staff WHERE complaints.`staff_id`=`staff`.`staff_id` AND complaints.`reciver`='HOD'");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td><?php echo $i ?></td>
      <td><?PHP echo $row['complaint_date']?></td>
      <td><?php echo $row ['firstname']."".$row['lastname']?>;</td>
      <td><?php echo $row ['complaints']?></td>
      <td><div align="center">
<a href="replyhod.php?id=<?php echo $row['complaint_id']?>">reply</a></div></td>
    </tr>
   <?php
		}}?>
  </table>
</form>
</body>
</html>