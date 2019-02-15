<%@page import="dbpackage.Dbqueries"%>
<%@ page contentType="text/html; charset=utf-8" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">

 
 
	
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
		
		document.getElementById("c").style.visibility="visible";
		flag= false;
	    }
	else
	   {
	       document.getElementById("c").style.visibility="hidden";
	   }

          if(document.getElementById("textfield3").value=="")
	    {
		
		document.getElementById("j").style.visibility="visible";
		flag= false;
	    }
	else
	   {
	       document.getElementById("j").style.visibility="hidden";
	   }

          if(document.getElementById("textfield4").value.length!=6)
	    {
		
		document.getElementById("d").style.visibility="visible";
		flag= false;
	    }
	else
	   {
	       document.getElementById("d").style.visibility="hidden";
	   }
          if(document.getElementById("textfield5").value=="")
	    {
		
		document.getElementById("e").style.visibility="visible";
		flag= false;
	    }
	else
	   {
	       document.getElementById("e").style.visibility="hidden";
	   }
           if(document.getElementById("textfield6").value.length!=10)
	    {
		
		document.getElementById("ff").style.visibility="visible";
		flag= false;
	    }
	else
	   {
	       document.getElementById("ff").style.visibility="hidden";
	   }
        
        if(document.getElementById("email").value=="")
	 {
		
		document.getElementById("h").style.visibility="visible";
		flag= false;
	}
	else
	{
	document.getElementById("h").style.visibility="hidden";
	}
         var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

           {

              document.getElementById("h").style.visibility="visible";
		  flag=false;
	     }
		  else
	     {
	      document.getElementById("h").style.visibility="hidden";
	     }
             

       return flag;

        }
        </script>


</head>



     <%
        String lid=request.getParameter("id");
        Dbqueries obj=new Dbqueries();
        ResultSet rs=obj.edit_staff(lid);
        if(rs.next())
        {
        String g=rs.getString("gender");
        String u=rs.getString("unit_id");
        %>
        <form id="form1" name="form1" method="post" action="">
            <table width="300" border="0" cellpadding="10" cellspacing="10" align="center">
                <caption>
    EDIT 
      STAFF REGISTRATION
                </caption>
    
    <tr>
      <td width="126">NAME</td>
      <td width="158"><input type="text" name="textfield" id="textfield" value="<%=rs.getString(2)%>"/></td>
         <td>
	    <div id="a" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
   
    <tr>
      <td>PLACE</td>
      <td><input type="text" name="textfield2" id="textfield2" value="<%=rs.getString(3)%>"/></td>
         <td>
	    <div id="c" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td>POST</td>
      <td><input type="text" name="textfield3" id="textfield3" value="<%=rs.getString(4)%>"/></td>
         <td>
	    <div id="j" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td>PIN </td>
      <td><input type="number" name="textfield4" id="textfield4" min="0" value="<%=rs.getString(5)%>"/></td>
         <td>
	    <div id="d" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><p>
        <input type="radio" name="radio" id="radio" value="male" <% if(g.equalsIgnoreCase("male")) {%> checked="checked"<%}%> />
        MALE</p>
        <p>
          <input type="radio" name="radio" id="radio2" value="female" <% if(g.equalsIgnoreCase("female")) {%> checked="checked"<%}%> />
          FEMALE</p></td>
    </tr>
    <tr>
      <td>QUALIFICATION</td>
      <td><input type="text" name="textfield5" id="textfield5" value="<%=rs.getString(7)%>"/></td>
         <td>
	    <div id="e" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td>CONTACT NO</td>
      <td><input type="number" name="textfield6" id="textfield6" min="0" value="<%=rs.getString(8)%>"/></td>
         <td>
	    <div id="ff" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
     
    <tr>
      <td>EMAIL ID</td>
      <td><input type="text" name="textfield7" id="email" value="<%=rs.getString(9)%>"/></td>
         <td>
	    <div id="h" style="visibility:hidden" align="center"><font color="#FF0000">Invalid Entry!!</font></div>
		</td>
    </tr>
    <tr>
      <td colspan="2"align="center"><input type="submit" name="button" id="button" value="EDIT" onclick="return validate()" /></td>
    </tr>
    
  </table>
        </form>
    <%}%>



<%
    if(request.getParameter("button")!=null)
    {
        String name=request.getParameter("textfield");
        String place=request.getParameter("textfield2");
        String post=request.getParameter("textfield3");
        String pin=request.getParameter("textfield4");
        String gender=request.getParameter("radio");
        String qualification=request.getParameter("textfield5");
        
       
        String contactno=request.getParameter("textfield6");
        
        String email=request.getParameter("textfield7");
        
         int i=obj.update_staff(name,place, post, pin, gender, qualification, contactno, email, lid);
        if(i>0){
            %>
            <script>
                alert("success")
                window.location="admin.jsp";
            </script>
            <%
        }
        else
        {
            
            %>
            <script>

    alert("error")
            </script>
            <%
        }
        
    
    }
%>