<html>
<title>Ms.BC2016</title>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('db_attendance', $con);
if(isset($_POST['submit'])){
$sql="INSERT INTO `db_attendance`(`studnum`, `Lname`, `fname`, `depart`, `stat`) VALUES ('$_POST[student_number]','$_POST[last_name]','$_POST[first_name]','$_POST[depart]','')";
		
		
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "<script>alert('Successfully added!');</script>";
		include 'insert_hs.php';
 
 }
 else {
	echo "<script>alert('ID already exist');</script>";
		include 'insert_hs.php';
 }
?>