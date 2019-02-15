<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		
		 if(document.getElementById("textarea").value=="")
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
</head>
<?php
include("connection.php");
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td colspan="2"><div align="center">SEND NOTIFICATION</div></td>
    </tr>
    <tr>
      <td>date</td>
      <td><label for="textfield"></label>
      <input type="date" name="date" id="textfield" /></td>
      <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>subject</td>
      <td><label for="textfield2"></label>
        <div align="left">
          <input type="text" name="subject" id="textfield2" />
        </div></td>
        <td>  <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">invalid entry!!</font></div></td>
    </tr>
    <tr>
      <td>details</td>
      <td><label for="textarea"></label>
        <textarea name="details" id="textarea" cols="45" rows="5"></textarea></td>
        <td>  <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
       <input type="submit" name="button" id="button" value="send" onclick="return validate()"  />
      </div></td>
      
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$subject=$_POST['subject'];
	$details=$_POST['details'];
	$date=$_POST['date'];

	

	$res=mysql_query("INSERT INTO notification(`subject`,`details`,`date`)VALUES('$subject','$details','$date') ");
	if($res>0)
	{
		?>
        <script>
		alert(" notification send successfully ");
		window.location=" adminhome.php ";
		</script>
        
        <?php
		
	}
	
}

?>