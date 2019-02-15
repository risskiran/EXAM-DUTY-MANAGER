<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include('connection.php')?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td colspan="3"><div align="center">VIEW FEEDBACK</div></td>
    </tr>
    <tr>
      <td>SL.NO</td>
      <td>DATE</td>
      <td>FEEDBACK</td>
    </tr>
    <tr>
      <?PHP
	
	$res=mysql_query( " SELECT feedback.`feedback`,feedback.`date`FROM feedback ");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{
			$i++;
			?>
			
      <td><?php echo $i?></td>
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>
    
    </tr>
      <?php }}?>
  </table>
</form>
</body>
</html>