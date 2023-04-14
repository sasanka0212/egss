<?php
$username='root';
$hostname='localhost';
$userpassword='';
$dbname='exam_guide_system';

$dbc=mysqli_connect($hostname,$username,$userpassword,$dbname);
if(!$dbc)
{
 die('Not conneted with database'.mysqli_error());
}

?>