<?php
session_start();
$student_id= $_SESSION['student'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if($student_id=='2015-01683') {
echo"<center><font size='5' style='font-family: Verdana;
				background-color: pink;
				'>";
echo "Welcome!!!!!  ";
echo "GALANZA, MERIAN KHAYLE.. hahahahaha! :D";
echo "</center></font>";
echo "<br>";
echo "</center></font>";
echo "<br>";
} 
  
 else{ 
mysql_select_db("db_attendance", $con);

$result=mysql_query("SELECT * FROM db_attendance where studnum='$student_id'");

while($row = mysql_fetch_array($result)){
echo"<center><font size='5' style='font-family: Verdana;
				background-color: pink;
				'>";
echo "Welcome!!!!!  ";
echo $row['Lname'].",".$row['fname'];
echo "</center></font>";
echo "<br>";
}
}
?>