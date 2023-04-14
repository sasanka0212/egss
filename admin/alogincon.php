<?php 
session_start();
include('../main.php'); ?>
<?php
if(isset($_POST['username']) )
{
 $adminname=$_POST["username"];
 $password=$_POST["password"];
 
 
$sql="select count(*) as 'count' from admin_login where username='".$adminname."' and password='".$password."'";
if(mysql_query($sql))
{
	 $_SESSION['adminname']=$adminname;	 
?>
	 
	<?php echo "Allocat college" .'<a href="Data.php">Data</a>'.'<br>';
         echo "print the allocation list".' <a href="app-list.php">app-list</a>';
 ?>
	 
<?php	 
	 
	 
}
else
{
	$strmsg='Wrong User Id and Password';
}
echo"\n\n\n\n";

}
else
{
?>
<a href="alogin.php">Please login</a>

<?php } ?>

