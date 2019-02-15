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


<script>
function validate()
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
	if(document.getElementById("textfield2").value=="")
	    {
       document.getElementById("b").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("b").style.visibility="hidden";
		 
		 }	 
		 if(document.getElementById("textfield3").value=="")
	    {
       document.getElementById("c").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("c").style.visibility="hidden";
		 
		 }
		 return flag;
    }
</script>

<form id="form1" name="form1" method="post" action="">
  <table width="321" border="1">
    <tr>
      <td colspan="2">CHANGE PASSWORD</td>
    </tr>
    <tr>
      <td width="144">current password</td>
      <td width="132"><label for="textfield"></label>
      <input type="password" name="cpassword" id="textfield" /></td>
      <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>new password</td>
      <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2" /></td>
        <td>  <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td height="38">confirm new password</td>
      <td><label for="textfield3"></label>
      <input type="password" name="textfield3" id="textfield3" /></td>
        <td>  <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td height="40" colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="change " onclick="return validate()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	   $cpassword=$_POST['cpassword'];
       $newpassword=$_POST['textfield2'];
       $cnfrmnew=$_POST['textfield3'];
          session_start();
		  $lid=$_SESSION['lid'];
		 $res=mysql_query(" SELECT * FROM `login` WHERE `login_id`='$lid' AND `password`=' $cpassword '");
		 if($res>0)
		 {
		 mysql_query("UPDATE `login` SET `password`='$newpassword' WHERE `login_id`='$lid'");?>
		  <script>
		alert("password change successfully");
		window.location="adminhome.php";
		</script>
        <?php
			 }
		  
		    ?>
<?php }
?>