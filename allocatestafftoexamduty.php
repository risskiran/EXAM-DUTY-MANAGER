<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("connection.php");
?>
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
	return flag;
	}

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
                var url="ajax_exam.php";
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

		function showstaff(to){
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
                var url="ajax_staff_alloc.php";
                url +="?eid=" +to
                xmlHttp.onreadystatechange = stateChange2;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange2(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("st").innerHTML=xmlHttp.responseText   
					//alert(xmlHttp.responseText);
                }
	}


</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="586" border="01">
    <tr>
      <td colspan="3"><div align="center">allocation</div></td>
    </tr>
    <tr>
      <td width="218">No.of Staffs</td>
      <td colspan="2"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
       <td>  <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">please enter!!</font></div></td>
    </tr>
    
    <tr>
      <td>Exam type</td>
      <td colspan="2"><select onchange="showclass(this.value)" name="select2" id="select4">
        <option >SELECT</option>
        <option>SDE</option>
        <option>REGULAR</option>
      </select></td>
    </tr>
    <tr>
      <td>Exam</td>
      <td colspan="2"><label for="select5"></label>
        <select name="select" id="select3"  onchange="showstaff(this.value)">
        
         
      </select>       
       <label for="select4"></label></td>
    </tr>
    
    </table>
    
    <div id="st">
    
    </div>

</form>
</body>
</html>