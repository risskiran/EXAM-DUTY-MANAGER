   
<?php
			include('connection.php');
			$exid=$_GET['eid'];
		  		  
		  $dt="";
		  //exam date,,,then get staffs... no leave
		  $r=mysql_query("SELECT `exam_date` FROM `exam` WHERE exam_id='$exid'");
		  if(mysql_num_rows($r)>0){
			  while($rs=mysql_fetch_array($r)){
				  $dt=$rs[0];
			  }
		  }
		  
if($dt!=""){
			  
?>		 
  <table width="1016" height="129" border="1">
    <tr>
      <td height="45" colspan="11"><div align="center">STAFF LIST</div></td>
    </tr>
    <tr>
      <td width="49" height="37"><div align="center">SL.NO</div></td>
      <td width="54"><div align="center">NAME</div></td>
      <td width="72"><div align="center">GENDER</div></td>
      <td width="110"><div align="center">DEPARTMENT</div></td>
      <td width="110">&nbsp;</td>
      
    </tr>
      
	<?PHP
	
	$res=mysql_query("SELECT staff.*,`department`.`dept_name` FROM staff,department WHERE `staff`.`dept_id`=`department`.`dept_id` AND `login_id` NOT IN (SELECT `staff_id` FROM `leave` WHERE `date`='$dt' AND STATUS='approved')");
	if(mysql_num_rows($res)>0)
	{
		$i=0;
	while($row=mysql_fetch_array($res))
		{	
			$i++;
	?>
    <tr> 
      <td height="37"><?php echo $i?></td>
      <td><?php echo $row['first_name']." ".$row['last_name'] ?></td>
      <td><?php echo $row['gender']?> </td>
      <td><?php echo $row['dept_name']?></td>
     <td></td>
      
    </tr>
    <?php
		}
		}?>
   
  </table> 
			 
			 
	<?php		 
			  
			 // SELECT * FROM staff WHERE `login_id` NOT IN (SELECT `staff_id` FROM `leave` WHERE `date`='' AND STATUS='')
		  }
		  else{
			echo "no exam";  
		  }
		  
		  
		  ?>