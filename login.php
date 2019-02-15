<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
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
	   return flag;
}
</script>
</head>
<?php
include("connection.php");
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="367" border="0">
    <tr>
      <td width="357"><div align="center">user name</div></td>
    </tr>
    <tr>
      <td height="35"><label for="textfield"></label>
        <div align="center">
          <input type="text" name="username" id="textfield" />
      </div></td>
       <td>
	    <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td><div align="center">password</div></td>
    </tr>
    <tr>
      <td height="35"><div align="center">
        <input type="password" name="pass" id="textfield2" />
      </div></td>
      <td>
	    <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td height="28"><div align="center">
        <input type="submit" name="button" id="button" value="login" onclick="return valid()"/>
      </div></td>
    </tr>
    <tr>
      <td height="28"><div align="center"><a href="#">forgot password</a></div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$uname=$_POST['username'];
	$password=$_POST['pass'];
	$res=mysql_query("SELECT * FROM `login` WHERE `user_name`='$uname' AND `password`='$password'");
	if(mysql_num_rows($res)>0)
	{
	$row=mysql_fetch_array($res);
		
			$lid=$row[0];
			$type=$row[3];
			session_start();
			$_SESSION['lid']=$lid;
			if($type=="admin")
			{
			
		header("location:adminhome.php");
			}
			else if($type=="admin")
			{
			
		header("location:adminhome.php");
			
		}
			else if($type=="HOD")
			{
			
		header("location:hodhome.php");
		
			
		}
			else if($type=="examcordinator")
			{
			
		header("location:examcoordinatorhome.php");
		
			
		}
		
	}
	
}

?>