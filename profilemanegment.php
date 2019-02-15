<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>function validate()
	{
	var flag=true;
	if(document.getElementById("textfield4").value=="")
	    {
       document.getElementById("a").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("a").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield11").value=="")
	    {
       document.getElementById("b").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("b").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield15").value=="")
	    {
       document.getElementById("c").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("c").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield16").value=="")
	    {
       document.getElementById("d").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("d").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield17").value=="")
	    {
       document.getElementById("e").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("e").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield18").value=="")
	    {
       document.getElementById("f").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("f").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield19").value=="")
	    {
       document.getElementById("g").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("g").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield20").value=="")
	    {
       document.getElementById("h").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("h").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield21").value=="")
	    {
       document.getElementById("i").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("i").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield22").value=="")
	    {
       document.getElementById("j").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("j").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield23").value=="")
	    {
       document.getElementById("k").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("k").style.visibility="hidden";
		 
		 }
		 return flag;
    }
    </script>

<body>
<?php$lid=$_SESSION['lid'];

session_start();
include("connection.php");
$res=mysql_query("SELECT `staff`.*,`department`.`dept_name` FROM `staff`,`department` WHERE `login_id`='$lid' AND `department`.`dept_id`=`staff`.`dept_id`");
$row=mysql_fetch_array($res);
?>
<form id="form1" name="form1" method="post" action="">
 
  <table width="307" border="0">
    <tr>
      <td height="40" colspan="2"><div align="center">PROFILE MANAGMENT</div></td>
    </tr>
    <tr>
      <td width="129">FIRST NAME</td>
      <td width="162"><input type="text" readonly="readonly"name="firstname" value="<?php echo $row[1]?>"id="textfield4" /></td>
      <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>LAST NAME</td>
      <td><input type="text" name="lastname" readonly="readonly" value="<?php echo $row[2]?>" id="textfield11" /></td>
      <td>  <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><p>
        <label for="textfield11"></label>
        <label for="select3"></label>
        <input type="radio" readonly="readonly" name="radio" <?php if($row[3]=='male'){ ?> checked="checked" <?php } ?> id="radio3" value="male" />
        <label for="radio3"></label>
        male</p>
        <p>
          <input type="radio" readonly="readonly" name="radio" <?php if($row[3]=='female'){ ?> checked="checked" <?php } ?> id="radio4" value="female" />
          <label for="radio4"></label>
          female
          <label for="textfield11"></label>
        </p></td>
    </tr>
    <tr>
      <td>HOUSE NAME</td>
      <td><label for="textarea2"></label>
        <label for="textfield13"></label>
        <label for="textfield14"></label>
        <label for="textfield15"></label>
        <input type="text" name="housename"  value="<?php echo $row[4]?>"id="textfield15" /></td>
        <td>  <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>PLACE</td>
      <td><label for="textfield16"></label>
        <input type="text" name="place" value="<?php echo $row[5]?>" id="textfield16" /></td>
        <td>  <div id="d" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>POST</td>
      <td><label for="textfield17"></label>
        <input type="text" name="post" id="textfield17" value="<?php echo $row[6]?>" /></td>
        <td>  <div id="e" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>PIN CODE</td>
      <td><label for="textfield18"></label>
        <input type="text" name="pincode" id="textfield18" value="<?php echo $row[7]?>" /></td>
        <td>  <div id="f" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>CITY</td>
      <td><label for="textfield19"></label>
        <input type="text" name="city" value="<?php echo $row[8]?>"id="textfield19" /></td>
        <td>  <div id="g" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><label for="textfield20"></label>
        <input type="date" name="dob"  readonly="readonly" value="<?php echo $row[9]?>" id="textfield20" /></td>
        <td>  <div id="h" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="textfield21"></label>
        <input type="text" name="email"readonly="readonly" value="<?php echo $row[10]?> "id="textfield21" /></td>
        <td>  <div id="i" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td><label for="textfield22"></label>
        <input type="text" name="phoneno"  value="<?php echo $row[11]?>"id="textfield22" /></td>
        <td>  <div id="j" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td>DEPARTMENT</td>
      <td><label for="select4"><?php echo $row[15]?></label></td>
    </tr>
    <tr>
      <td height="31">EXPERIENCE</td>
      <td><label for="textfield23"></label>
        <input type="text" readonly="readonly" value="<?php echo $row[13]?>" name="exp" id="textfield23" /></td>
        <td>  <div id="k" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    <tr>
      <td height="44" colspan="2"><div align="center">
        <input type="submit" name="button3" id="button3" value="save and exit" onclick="return validate()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

<?php
if(isset($_POST['button3']))
{
	
	$shname=$_POST['housename'];
	$splace=$_POST['place'];
	$spost=$_POST['post'];
	$spincode=$_POST['pincode'];
	$scity=$_POST['city'];
	$sphone=$_POST['phoneno'];
	
$res=mysql_query("UPDATE staff SET `house_name`='$shname',`place`='$splace',`post`='$spost',`pin_code`='$spincode',`city`='$scity',`phone`='$sphone' WHERE `login_id`='$lid'");
	if($res>0)
	{
		?>
        <script>
		alert("profile updated successfully");
		window.location="hodhome.php";
		</script>
        
        <?php
		
	}
	
}

?>