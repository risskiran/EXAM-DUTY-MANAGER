<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
include("connection.php");
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="624" border="1">
    <tr>
      <td colspan="4"><p align="center">NOTIFICATIONS</p></td>
    </tr>
    <tr>
      <td width="112">SL.NO</td>
      <td width="59">DATE</td>
      <td width="239">SUBJECT</td>
      <td width="186">CONTENT</td>
    </tr>
    <tr>
     <?PHP
	
	$res=mysql_query("SELECT * FROM `notification`");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			
	?>
      <td height="47"><?php echo $i?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['subject']?></td>
      <td><?php echo $row ['details']?>;</td>
    </tr>
   <?php }} ?>
  </table>
</form>
</body>
</html>