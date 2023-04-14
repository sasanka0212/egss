<?php include('main.php');?>

<?php session_start();?>
<?php
   echo"hi";
       $fname=$_POST["fname"];
       $lname=$_POST["lname"];
       $address=$_POST["address"];
       $pin=$_POST["pin"];
       $dist1=$_POST["dist1"];
       $dept=$_POST["dept"];
       $desg=$_POST["desg"];
       $phone1=$_POST["phone1"];
       $phone2=$_POST["phone2"];
       $emailid=$_POST["emailid"];
       $gender=$_POST["gender"];
       $clgid=$_POST["clgid"];
       $cclg=$_POST["cclg"];
       $loca=$_POST["loca"];
       $space=$_POST["space"];
       $dist2=$_POST["dist2"];
     $query="update reg2 set fname='".$fname."',lname='".$lname."',address='".$address."',pin='".$pin."',dist1='".$dist1."',dept='".$dept."',desg='".$desg."',phone1='".$phone1."',phone2='".$phone2."',gender='".$gender."',clgid='".$clgid."',cclg='".$cclg."',loca='".$loca."',space='".$space."',dist2='".$dist2."' where email='".$emailid."'";
$flag=0;
 if(mysqli_query($dbc,$query))
{
//echo "hi i am here";
	 $flag=1;
//echo $flag;
	 
}
else
{
	echo mysqli_error();
	 $flag=0;
	 //echo $flag;

	echo "Sorry information not submitted";
}
?>
<?php 
if( $flag==1)
{

echo '<a href="login.php"><b><u>Go to log_in page</a>';

}
else
{
?>
<a href="reg.php">Go to Site</a>
<?php
}
?>
?>