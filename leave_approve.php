<?php
include("connection.php");
$leave_id=$_GET['leave_id'];
mysql_query("UPDATE `leave` SET `status`='approved' WHERE `leave_id`='$leave_id'");
?>