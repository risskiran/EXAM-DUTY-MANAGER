<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>adding new stafft</title>
<script>
 
 function validate()
	{
	var flag=true;
	if(document.getElementById("textfield").value=="")
	    {
       document.getElementById("a").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("a").style.visibility="hidden";
		 
		 }
		
		 if(document.getElementById("textfield2").value=="")
	    {
       document.getElementById("b").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("b").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield13").value=="")
	    {
       document.getElementById("c").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("c").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield14").value=="")
	    {
       document.getElementById("d").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("d").style.visibility="hidden";
		 
		 }
		 if(document.getElementById("textfield5").value=="")
	    {
       document.getElementById("e").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("e").style.visibility="hidden";
		 
		 }
		  if(document.getElementById("textfield6").value=="")
	    {
       document.getElementById("f").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("f").style.visibility="hidden";
		 
		 }
		  if(document.getElementById("textfield10").value=="")
	    {
       document.getElementById("g").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("g").style.visibility="hidden";
		 
		 }
		  if(document.getElementById("textfield7").value=="")
	    {
       document.getElementById("h").style.visibility="visible"
	   flag= false;
		}
	else
	{
		 document.getElementById("h").style.visibility="hidden";
		 
		 }
		  if(document.getElementById("textfield8").value=="")
	    {
		
		document.getElementById("i").style.visibility="visible";
		flag= false;
	}
	
	{
	document.getElementById("i").style.visibility="hidden";
	}
         var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("textfield8").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

           {

              document.getElementById("i").style.visibility="visible";
		  flag=false;
	     }
		  else
	     {
	      document.getElementById("i").style.visibility="hidden";
	     }
		
	
		  if(document.getElementById("textfield9").value.length!=10)
	    {
       document.getElementById("j").style.visibility="visible";
	   flag= false;
		}
	else
	{
		 document.getElementById("j").style.visibility="hidden";
		 
		 }
		  if(document.getElementById("textfield11").value=="")
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

</head>
<?php
include("connection.php");
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="307" border="0">
    <tr>
      <td height="40" colspan="2"><div align="center">ADD STAFF</div></td>
    </tr>
    <tr>
      <td width="129">FIRST NAME</td>
      <td width="162"><input type="text" name="firstname" id="textfield" /></td>
      <td> 	    <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>  </td>
   </tr>
    <tr>
      <td>LAST NAME</td>
      <td><input type="text" name="lastname" id="textfield2" /></td>
      <td>  <div id="b" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
   
    </tr>
    <tr>
      <td>GENDER</td>
      <td><p>
        <label for="textfield12"></label>
        <label for="select2"></label>
        <input type="radio" name="radio" id="radio" value="male" />
        <label for="radio"></label>
        male</p>
        <p>
          <input type="radio" name="radio" id="radio2" value="female" checked="checked"/>
          <label for="radio2"></label>
          female
<label for="textfield2"></label>
      </p></td>
    </tr>
    <tr>
      <td>HOUSE NAME</td>
      <td><label for="textarea"></label>
        <label for="textfield4"></label>        
      <label for="textfield3"></label>
      <label for="textfield13"></label>
      <input type="text" name="housename" id="textfield13" /></td>
            <td>  <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
          
    </tr>
    <tr>
      <td>PLACE</td>
      <td><label for="textfield14"></label>
      <input type="text" name="place" id="textfield14" /></td>
             <td>  <div id="d" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>   
    </tr>
    <tr>
      <td>POST</td>
      <td><label for="textfield5"></label>
      <input type="text" name="post" id="textfield5" /></td>
              <td>  <div id="e" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td> 
    </tr>
    <tr>
      <td>PIN CODE</td>
      <td><label for="textfield6"></label>
      <input type="text" name="pincode" id="textfield6" /></td>
            <td>  <div id="f" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
         
    </tr>
    <tr>
      <td>CITY</td>
      <td><label for="textfield10"></label>
      <input type="text" name="city" id="textfield10" /></td>
                <td>  <div id="g" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><label for="textfield7"></label>
      <input type="date" name="dob" id="textfield7" /></td>
              <td>  <div id="h" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="textfield8"></label>
      <input type="text" name="email" id="textfield8" /></td>
                <td>  <div id="i" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td><label for="textfield9"></label>
      <input type="text" name="phoneno" id="textfield9" /></td>
              <td>  <div id="j" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
    </tr>
    <tr>
      <td>DEPARTMENT</td>
      <td><label for="select3"></label>
        <select name="dept" id="select3">
          <option value="-1">select</option>
          <?php
		  $r=mysql_query("SELECT * FROM `department` ORDER BY `dept_name`");
		  if(mysql_num_rows($r)>0){
			  while($rs=mysql_fetch_array($r)){
		  ?>
          <option value="<?php echo $rs[0]?>"><?php echo $rs[1]?></option>
          
          <?php
			  }
		  }
		  ?>
        </select>       
      </td>
    </tr>
    <tr>
      <td height="31">EXPERIENCE</td>
      <td><label for="textfield11"></label>
      <input type="text" name="exp" id="textfield11" /></td>
            <td>  <div id="k" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div></td>
          
    </tr>
    <tr>
      <td height="44" colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="register" onclick="return validate()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	$sfname=$_POST['firstname'];
	$slname=$_POST['lastname'];
	$sgender=$_POST['radio'];
	$shname=$_POST['housename'];
	$splace=$_POST['place'];
	$spost=$_POST['post'];
	$spincode=$_POST['pincode'];
	$scity=$_POST['city'];
	$sdob=$_POST['dob'];
	$semail=$_POST['email'];
	$sphone=$_POST['phoneno'];
	$exp=$_POST['exp'];
	$sdeptid=$_POST['dept'];
	$pass='12345678';
	
	mysql_query("INSERT	INTO login(`user_name`,`password`,`user_type`)VALUES('$semail','$pass','teacher')");
	$loginid=mysql_insert_id();

$res=mysql_query("INSERT INTO staff(`first_name`,`last_name`,`gender`,`house_name`,`place`,`post`,`pin_code`,`city`,`dob`,`email`,`phone`,`expiriance`,`dept_id`,`login_id`) VALUES('$sfname','$slname','$sgender','$shname','$splace','$spost','$spincode','$scity','$sdob','$semail','$sphone','$exp','$sdeptid','$loginid')");
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