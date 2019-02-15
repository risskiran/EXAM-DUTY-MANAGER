<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function check()
{ 
    
	return confirm("DO you want to delete???");
	//if(value==true)
//	{
//		alert("deleted");
//	}
//	else
//	{
//		window.location="staffviewadmin.php";
//	}
//	return true;
}
</script>
</head>
<?php
include("connection.php");
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1016" height="145" border="1">
    <tr>
      <td height="45" colspan="11"><div align="center">STAFF VIEW</div></td>
    </tr>
    <tr>
      <td width="49"><div align="center">SL.NO</div></td>
      <td width="54"><div align="center">NAME</div></td>
      <td width="70"><div align="center">ADDRESS</div></td>
      <td width="129"><div align="center">PHONE NUMBER</div></td>
      <td width="72"><div align="center">EMAIL ID</div></td>
      <td width="72"><div align="center">GENDER</div></td>
      <td width="110"><div align="center">DEPARTMENT</div></td>
      <td width="120"><div align="center">DESIGNATION </div></td>
      <td width="120"><div align="center">NO.LEAVES</div></td>
      <td width="75">EXPERIENCE</td>
      <td width="75"><div align="center"></div></td>
    </tr>
    <tr>   <?PHP
	
	$res=mysql_query("SELECT `staff`.*,`department`.`dept_name` FROM `staff`,`department` WHERE `staff`.`dept_id`=`department`.`dept_id`");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td><?php echo $i?></td>
      <td><?php echo $row['first_name']." ".$row['last_name'] ?></td>
      <td><?php echo $row['house_name']?> <br />
          <?php echo $row['place']?> <br />
          <?php echo $row['post']?> <br />
          <?php echo $row['pin_code']?> <br />
          <?php echo $row['city']?> <br />
            </td>
      <td> <?php echo $row['phone']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['gender']?> </td>
      <td><?php echo $row['dept_name']?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $row['expiriance']?></td>
      <td><a href="staff_delete.php?id=<?php echo $row['login_id']?>" onclick="return check()">DELETE</a></td>
    </tr>
    <?php
		}}?>
   
  </table>
</form>
</body>
</html>


