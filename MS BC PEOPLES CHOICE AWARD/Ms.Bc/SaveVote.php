<?php
session_start();
$student_id= $_SESSION['student'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('db_attendance', $con);
if(isset($_POST['contestant'])){
$sql="INSERT INTO `voting`(`studnum`, `vote`) 
		VALUES ('$student_id','$_POST[contestant]')";
		
		
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "<script>alert('Thank You for Voting!!!!');</script>";
		include 'main.php';
 
 }
 else {
	echo "<script>alert('Choose Contestant!');</script>";
		include 'voting.php';
 }
?>