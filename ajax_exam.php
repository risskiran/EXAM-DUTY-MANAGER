<select name="select" id="select3" onchange="showstaff(this.id)">     
            <?php
			include('connection.php');
		  $id=$_GET['id'];
		  $r=mysql_query("SELECT * FROM `exam` WHERE `exam_type`='$id'");
		  if(mysql_num_rows($r)>0){
			  while($rs=mysql_fetch_array($r)){
		  ?>
          <option value="<?php echo $rs['exam_id']?>"><?php echo $rs['exam_name']?></option>
          
          <?php
			  }
		  }
		  ?>
          
          </select>