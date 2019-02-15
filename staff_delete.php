  
		<?php
$id=$_GET['id'];
include('connection.php');
mysql_query("DELETE FROM `staff` WHERE `login_id`='$id'");
?>
			
   <script>
		alert("staff deleted");
		window.location="staffviewadmin.php";
		</script>