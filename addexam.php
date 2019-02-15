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
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="267" border="0">
    <tr>
      <td colspan="2">ADD EXAM</td>
    </tr>
    <tr>
      <td width="90">EXAM TYPE</td>
      <td width="161"><p>
        <label>
          <input type="radio" name="exmtype" value="REGULAR" id="RadioGroup1_0" checked="checked" />
          regular</label>
        <br />
        <label>
          <input type="radio" name="exmtype" value="SDE" id="RadioGroup1_1" />
          SDE</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>EXAM NAME</td>
      <td><label for="textfield"></label>
      <input type="text" name="examname" id="textfield" /></td>
       <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td height="33">DATE</td>
      <td><input type="date" name="examdate" id="textfield2" /></td>
       <td>  <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td height="43">TIME</td>
      <td><input type="time" name="examtime" id="textfield3" /></td>
       <td>  <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="textfield3"></label>        <label for="textfield2">
        <div align="center">
          <input type="submit" name="button" id="button" value="add exam" onclick="return validate()" />
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$examname=$_POST['examname'];
	$examtype=$_POST['exmtype'];
	$examtime=$_POST['examtime'];
	$examdate=$_POST['examdate'];
	

	$res=mysql_query("INSERT INTO exam(`exam_name`,`exam_date`,`exam_time`,`exam_type`)VALUES('$examname','$examdate','$examtime','$examtype') ");
	if($res>0)
	{
		?>
        <script>
		alert(" exam added successfully ");
		window.location=" examcoordinatorhome.php ";
		</script>
        
        <?php
		
	}
	
}

?>