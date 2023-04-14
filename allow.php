<html>
<body>


<center>



<?php if($rows){?>
<h2 align="center" ><font face="forte" color="blue">Allocated Colleges </font></h2>
<table width="60%">
	<tr>
      <td>Name: </td>
	  <td><?php echo $rows['fist_name'].' '.$rows['last_name']; ?> </td>
	</tr>
	<tr>
	  <td>Email:</td>
	  <td> <?php echo $rows['email']; ?> </td>	  
    </tr>
	
	<tr>
      <td>College Name: </td>
	  <td><?php  echo $rows['college_name']; ?></td>
	  </tr>
	<tr>
	  <td>College Address:</td>
	  <td><?php echo $rows['college_address']?></td>
    </tr>
	<tr>
	  <td>Time:</td>
	  <td><?php echo $rows['allocated_date_time']?></td>
    </tr>
    
    </table>
	<input type="button" onclick="window.print()" name="print" value="Print"/>
    <?php } else{?>
		<h2 align="center" ><font face="forte" color="red">No Allocated Colleges found</font></h2>
		<a href="home.php">Go to Site</a>
	<?php } ?>

</body>
</html>