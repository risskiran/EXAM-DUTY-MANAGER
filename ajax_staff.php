<select name="select3" id="select3">     
            <?php
			include('connection.php');
		  $id=$_GET['id'];
		  $r=mysql_query("SELECT `staff`.* FROM `staff` WHERE `dept_id`='$id'");
		  if(mysql_num_rows($r)>0){
			  while($rs=mysql_fetch_array($r)){
		  ?>
          <option value="<?php echo $rs['login_id']?>"><?php echo $rs['first_name']." ".$rs['last_name']?></option>
          
          <?php
			  }
		  }
		  ?>
          
          </select>