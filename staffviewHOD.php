<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("connection.php");
session_start();
$lid=$_SESSION['lid'];
 ?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="565" border="1">
    <tr>
      <td height="65" colspan="5"><div align="center">STAFF DETAILS</div></td>
    </tr>
    <tr>
      <td height="62">sl.no</td>
      <td><div align="center">name</div></td>
      <td><div align="center">phone number</div></td>
      <td><div align="center">
        <p>email ID</p>
      </div></td>
      <td><div align="center">address</div></td>
    </tr>
    <tr>
     <?PHP
	
	$res=mysql_query( "SELECT `staff`.* FROM `staff`,`department`,`hod` WHERE `staff`.`dept_id`=`department`.`dept_id` AND `hod`.`dept_id`=`staff`.`dept_id` AND `hod`.`login_id`='$lid' ");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			?>
			
      <td height="30"><?php echo $i?></td>
      <td><?php echo $row['first_name']." ".$row['last_name']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['house_name']?> <br />
          <?php echo $row['place']?> <br />
          <?php echo $row['post']?> <br />
          <?php echo $row['pin_code']?> <br />
          <?php echo $row['city']?> <br /> </td>
      <?php }}?>
    </tr>
  </table>
</form>
</body>
</html>