<?php 
session_start();
include('main.php'); 
 
	
$results = mysql_query('SELECT * from reg2  where roomno!=0');
if (!$results) {
    die('Invalid query: ' . mysql_error());
}
else
{

?>
<input type="button" onclick="window.print()" name="print" value="Print"/>
<center><h1>Saroj Mohan Institute of Technology (Diploma Division) 
<center> List of Teacher </center>Day:Friday
<?php
echo "Today is " . date("Y/m/d");

?></h1></center>
<table border="1" width="100%">
<thead>
<tr>
	<td>Candidate Name:</td>
	<td>email id:</td>
	<td>phone number:</td>
        <td>gender</td>
	<td>Roomnumber:</td>
	
	
</tr>
	
</thead>
<?php
 while($rows=mysql_fetch_assoc($results ))
{
?>
<tr>
	<td><?php echo $rows['fname'].' '.$rows['lname']  ?></td>
	<td><?php echo $rows['email'] ?></td>
	<td><?php echo $rows['phone2']  ?></td>
	
	<td><?php echo $rows['gender']  ?></td>
	<td><?php echo $rows['roomno']  ?></td>
	
</tr>

<?php
}
?>

<?php  
}?>
</table>
<?php echo "Allocat college" .'<a href="Data.php">Data</a>'.'<br>';
 	