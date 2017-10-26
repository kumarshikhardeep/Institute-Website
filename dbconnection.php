<?php
error_reporting(0);
$con=mysql_connect('localhost','root','');
if($con)
{
	$db='create database if not exists ksd';
	$result=mysql_query($db) or die('database not created');
	if($result)
	{
		mysql_select_db('ksd') or die('database not selected');
	}
}
?>
