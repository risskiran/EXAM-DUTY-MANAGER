<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function validate()
	{
	var flag=true;
	if(document.getElementById("textarea").value=="")
	    {
       document.getElementById("a").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("a").style.visibility="hidden";
		 
		 }
		 return flag;
	}
	
</script>
</head>
<?php
include("connection.php");
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="463" border="0">
    <tr>
      <td width="453"><div align="center">send complaint</div></td>
    </tr>
    <tr>
      <td height="110"><label for="textarea"></label>
        <div align="center">
          <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
      </div></td>
      <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="button" id="button" value="send to ADMIN"onclick="return validate()"  />
      </div></td>
       
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$complaint=$_POST['textarea'];

	
	session_start();
	$lid=$_SESSION['lid'];

	$res=mysql_query("INSERT INTO complaints(`complaints`,`reply`,`complaint_date`,staff_id,`reciver`)VALUES('$complaint','PENDING',CURDATE(),'$lid','ADMIN')");
	if($res>0)
	{
		?>
        <script>
		alert(" Complaint  send successfully");
		window.location=" examcoordinatorhome.php ";
		</script>
        
        <?php
		
	}
	
}

?>