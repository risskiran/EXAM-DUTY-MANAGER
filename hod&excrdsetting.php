<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script>


            var xmlHttp;
            function showclass(to){
				//alert(to);
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajax_staff.php";
                url +="?id=" +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("select3").innerHTML=xmlHttp.responseText   
					//alert(xmlHttp.responseText);
                }
	}

</script>
</head>
<?php
include("connection.php");
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="320" border="1">
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
   
    <tr>
      <td>DEPARTMENT</td>
      <td><label for="select2"></label>
        <div align="center">
          <select name="select2" id="select2" onchange="showclass(this.value)">
          <option value="">Select</option>
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
      </div></td>
    </tr>
    <tr>
      <td>STAFF</td>
      <td><label for="select3"></label>
        <div align="center">
          <select name="select3" id="select3">     
            
          
          </select>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="set" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
{
	    $dept=$_POST['select2'];
		
		$staff=$_POST['select3'];
		
	      
		
			 $res=mysql_query("SELECT * FROM `hod` WHERE `dept_id`='$dept'"); 
	                
					if(mysql_num_rows($res)>0)
					 {
						 if($row=mysql_fetch_array($res))
						 {
						 $login_id=$row['login_id'];
						 mysql_query("UPDATE `login` SET `user_type`='STAFF' WHERE `login_id`='$login_id'");}
			    mysql_query("UPDATE `hod` SET `login_id`='$staff' WHERE `dept_id`='$dept'");
				mysql_query("UPDATE `login` SET `user_type`='HOD' WHERE `login_id`='$staff'");
					 }
				    else
				      {
     mysql_query("INSERT INTO `hod`(`login_id`,`dept_id`)VALUES('$staff','$dept')");
	 mysql_query("UPDATE `login` SET `user_type`='HOD' WHERE `login_id`='$staff'");
					  }
      }
		?>