<?php
    session_start();
     mysql_connect("localhost","root","");
     mysql_select_db("exam_guide_system");
     $s="select * from reg2";
	 $resource=mysql_query($s);	 
     if(mysql_num_rows($resource))
	 {
		 
	?>	 
	 <form method="get" Action="submit.php">
	 <table border='1' width=100% height=100%>
	   <tr>
	    <th bgcolor="#666666">id</th>
		<th bgcolor="#666666">Name</th>
		<th bgcolor="#666666">Email</th>
		<th bgcolor="#666666">address</th>
		<th bgcolor="#666666">Distric</th>
		<th bgcolor="#666666">Gender</th>
		<th bgcolor="#666666">Phone (Res)</th>
		<th bgcolor="#666666">Phone (office)</th>
		<th bgcolor="#666666">Department</th>
		<th bgcolor="#666666">Desigination</th>
		<th bgcolor="#666666">College id</th>
                <th bgcolor="#666666">College Name</th>
                <th bgcolor="#666666">Action</th>
	 </tr>
	 <?php
     while($row=mysql_fetch_array($resource))
	 {
		 
		?> 
		<tr>
	      <td bgcolor="#CCCCCC"><?php echo $row['userid']?></td>
		  <td bgcolor="#CCCCCC"><?php echo $row['fname'].''.$row['lname']?></td>
		  <td bgcolor="#CCCCCC" ><?php echo $row['email']?></td>
		  <td bgcolor="#CCCCCC" ><?php echo $row['address']?></td>
		  <td bgcolor="#CCCCCC"><?php echo $row['dist1'] ?></td>
		  <td bgcolor="#CCCCCC"><?php echo $row['gender'] ?></td>
		    <td bgcolor="#CCCCCC"><?php echo $row['phone1'] ?></td>
			  <td bgcolor="#CCCCCC"><?php echo $row['phone1'] ?></td>
	      <td bgcolor="#CCCCCC"><?php echo $row['dept']?></td>
		    <td bgcolor="#CCCCCC"><?php echo $row['desg']?></td>
		   <td bgcolor="#CCCCCC"><?php echo $row['clgid']?></td>
                   <td bgcolor="#CCCCCC"><?php echo $row['cclg']?></td>
              <td><a href="submit.php?userid=<?php echo $row['0'] ?>"><strong>Assign</strong></a></td>
		   </tr>
		   
	<?php	
	 }
	 echo"</table>";
	 }
	 
	 ?>
		</form>
<?php echo "Allocat college" .'<a href="Data.php">Data</a>'.'<br>';
         echo "print the allocation list".' <a href="app-list.php">app-list</a>';
 ?>