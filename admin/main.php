<?php
$username='root';
$hostname='localhost';
$userpassword='';
$dbname='exam_guide_system';

$dbc=mysql_connect($hostname,$username,$userpassword);
if(!$dbc)
{
 die('Not conneted with database'.mysql_error());
}
$dbselect=mysql_select_db($dbname,$dbc);
if(!$dbselect)
{
 die('Not conneted with database'.mysql_error());
}



?>