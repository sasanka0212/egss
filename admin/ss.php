<?php include('main.php'); ?>

<?php session_start();?>
<?php

 
 $collegename=$_POST["collegename"];
 $userid=$_POST["userid"];
 $college_address=$_POST["collegeaddress"];
 $allocated_date_time=$_POST["allocatedt"];
 

$query="update reg2 set roomno='".$collegename."',allocated_date_time='".$allocated_date_time."' where name='".$userid."'";
$flag=0;
 
if(mysql_query($query))
{
		echo "Information Submitted Successfully ";
		?>
		 <a href="Data.php">Application List</a>
		<?php
	 
}
else
{
echo "Sorry information not submitted ";
?>
<a href="Data.php">Application List</a>
<?php
	
}
echo"\n\n\n\n";
?>
