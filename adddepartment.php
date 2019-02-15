<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("connection.php");
?>
<script>function validate()
	{
	
	var flag=true;
	if(document.getElementById("textfield").value=="")
	    {
       document.getElementById("a").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("a").style.visibility="hidden";
		 
		 }
	 return flag;}
         </script>>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="407" height="166" border="0">
    <tr>
      <td colspan="2"><div align="center">ADD DEPARTMENT</div></td>
    </tr>
    <tr>
      <td width="127">NAME </td>
      <td width="264"><label for="textfield"></label>
      <input type="text" name="dname" id="textfield" /></td>
       <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="add"  onclick="return validate()"/>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$dname=$_POST['dname'];

	$res=mysql_query("INSERT INTO `department` VALUES(NULL,'$dname')");
	if($res>0)
	{
		?>
        <script>
		alert("insert successfully");
		window.location="adminhome.php";
		</script>
        
        <?php
		
	}
	
}

?>