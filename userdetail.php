<?php

session_start();

include('conf.php');
  $sql='SELECT * from create_account inner join  allocate_college on create_account.userid=allocate_college.user_id where userid="'.$_SESSION['userid'].'" and allocated_date_time>=sysdate()';
$results = mysql_query($sql);
if (!$results) {
    die('Invalid query: ' . mysql_error());
}
else
{
 $rows=mysql_fetch_array($results );

	/*echo $rows['fist_name'].'<br>';
	
        echo $rows['last_name'].'<br>';
	echo $rows['email'].'<br>';
        echo $rows['college_name'].'<br>';
	echo $rows['college_address'].'<br>';
        echo $rows['allocated_date_time'].'<br>';
	*/

}
?>


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
		<a href="index.php">Go to Site</a>
	<?php } ?>

</body>
</html>