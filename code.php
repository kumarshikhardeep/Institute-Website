<?php
error_reporting(0);
require('dbconnection.php');
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $textarea=$_POST['textarea'];
  $tabl="create table if not exists messageus(username varchar(50),email varchar(50),query text)";
  $result=mysql_query($tabl) or die('messageus table not created');
  if($result)
  {
     $insert="insert into messageus values('$username','$email','$textarea')";
	 $result1=mysql_query($insert) or die('messageus data not inserted');
	 if($result1)
	 {
	   header('location:index.html');
	 }
	
   }
}
if(isset($_POST['reg']))
{
  $student=$_POST['student'];
  $father=$_POST['father'];
  $branch=$_POST['branch'];
  $percent=$_POST['percent'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $tb="create table if not exists onlinereg(s_name varchar(50),f_name varchar(50),branch varchar(10),percentage varchar(5),email varchar(50),mobile bigint(20),address text)";
  $result=mysql_query($tb) or die('onlinereg table not created');
  if($result)
  {
     $insert="insert into onlinereg values('$student','$father','$branch','$percent','$email','$mobile','$address')";
	 $result1=mysql_query($insert) or die('onlinereg data not inserted');
	 if($result1)
	 {
	    header('location:online registration.html');
	 }
   }
}

if(isset($_POST['submit5']))
{
  $name5=$_POST['name'];
  $address5=$_POST['address'];
  $mobile5=$_POST['mobile'];
  $email5=$_POST['email'];
  $query5=$_POST['query'];
  $tb5="create table if not exists contactus(name varchar(50),address varchar(50),mobile int,email varchar(50),query text)";
  $result5=mysql_query($tb5) or die('contactus table not created');
  if($result5)
  { 
     $insert5="insert into contactus values('$name5','$address5','$mobile5','$email5','$query5')";
	 $result6=mysql_query($insert5) or die('contactus data not inserted');
	 if($result6)
	 {
	    header('location:contact us.html');
		}
		
    }
	}
	
	 


   ?>