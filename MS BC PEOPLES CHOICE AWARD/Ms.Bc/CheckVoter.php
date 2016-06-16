<?php
session_start();
$_SESSION['student'] = $_POST['stud_ID'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('db_attendance', $con);

$sql="SELECT `studnum` FROM `db_attendance` WHERE studnum='$_POST[stud_ID]'";
$result=mysql_query($sql);
//count the student_id;
$count=mysql_num_rows($result);
if($count==1){

	$sql1="SELECT `studnum` FROM `voting` WHERE studnum='$_POST[stud_ID]'";
	$result1=mysql_query($sql1);
	//count the student_id;
	$count1=mysql_num_rows($result1);
	if($count1==1){
		echo "<script>alert('Student Already Vote!');</script>";
		include 'main.php';
	}
	else {
	header('location:voting.php');
	}
}

else {
echo "<script>alert('Student ID does not exist!!');</script>";
include 'main.php';
}
?>