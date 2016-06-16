<?php require_once('Connections/conn_vote.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('db_attendance', $con);
$query_rs_vote = "SELECT * FROM voting";
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

//0 GETTING THE TOTAL VOTES of Salado

$result_salado = mysql_query("SELECT * FROM voting WHERE vote='Salado' ");
$salado =mysql_num_rows($result_salado);


//1 GETTING THE TOTAL VOTES of vallejos
$result_vallejos = mysql_query("SELECT * FROM voting WHERE vote='Vallejos' ");
$vallejos =mysql_num_rows($result_vallejos);


//2 GETTING THE TOTAL VOTES OF Borbon
$result_borbon =mysql_query("SELECT * FROM voting WHERE vote='Borbon' ");
$borbon =mysql_num_rows($result_borbon);


//3 GETTING THE TOTAL VOTES OF Rostata
$result_rostata = mysql_query("SELECT * FROM voting WHERE vote='Rostata' ");
$rostata=mysql_num_rows($result_rostata);


//4  GETTING THE TOTAL VOTES OF Angusan
$result_angusan =  mysql_query("SELECT * FROM voting WHERE vote='Angusan' ");
$angusan =mysql_num_rows($result_angusan);

//5 GETTING THE TOTAL VOTES OF Balbero
$result_balbero =  mysql_query("SELECT * FROM voting WHERE vote='Balbero' ");
$balbero =mysql_num_rows($result_balbero);

//6 GETTING THE TOTAL VOTES OF Enario
$result_enario =  mysql_query("SELECT * FROM voting WHERE vote='Enario' ");
$enario =mysql_num_rows($result_enario);

//7 GETTING THE TOTAL VOTES OF Dilao
$result_dilao =  mysql_query("SELECT * FROM voting WHERE vote='Dilao' ");
$dilao =mysql_num_rows($result_dilao);

//8 GETTING THE TOTAL VOTES OF Limen
$result_limen =  mysql_query("SELECT * FROM voting WHERE vote='Limen' ");
$limen =mysql_num_rows($result_limen);

//9  GETTING THE TOTAL VOTES OF peralta
$result_peralta =  mysql_query("SELECT * FROM voting WHERE vote='Peralta' ");
$peralta =mysql_num_rows($result_peralta);

//10  GETTING THE TOTAL VOTES OF Orlanes
$result_orlanes =  mysql_query("SELECT * FROM voting WHERE vote='Orlanes' ");
$orlanes =mysql_num_rows($result_orlanes);

//11  GETTING THE TOTAL VOTES OF Espanol
$result_espanol =  mysql_query("SELECT * FROM voting WHERE vote='Espanol'");
$espanol=mysql_num_rows($result_espanol);

echo $espanol;

	

//Getting the percentage of the votes

$percent_salado = ($salado / $totalRows_rs_vote)*100;
$percent_vallejos = ($vallejos / $totalRows_rs_vote)*100;
$percent_borbon = ($borbon / $totalRows_rs_vote)*100;
$percent_rostata= ($rostata / $totalRows_rs_vote)*100;
$percent_angusan = ($angusan / $totalRows_rs_vote)*100;
$percent_balbero = ($balbero / $totalRows_rs_vote)*100;
$percent_enario = ($enario / $totalRows_rs_vote)*100;
$percent_dilao = ($dilao / $totalRows_rs_vote)*100;
$percent_limen = ($limen / $totalRows_rs_vote)*100;
$percent_peralta = ($peralta / $totalRows_rs_vote)*100;
$percent_orlanes = ($orlanes / $totalRows_rs_vote)*100;
$percent_espanol = ($espanol / $totalRows_rs_vote)*100;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Results</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<legend>Results</legend>
	<fieldset>
					<ul>
					
		   			<li>
					
				<span class="total-votes"><?php echo $salado ?></span> Salado
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_salado,2); ?>%;">
					 <?php echo round($percent_salado,2); ?>%
				</div>
			</li>
			
			<li>
				<span class="total-votes"><?php echo $vallejos ?></span>Vallejos
				<div class="results-bar" style="width: <?php echo round($percent_vallejos,2); ?>%;">
					 <?php echo round($percent_vallejos,2); ?>%
				</div>
			</li>
			<li>
		
				<span class="total-votes"><?php echo $borbon ?></span>Borbon
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_borbon,2); ?>%;">
					 <?php echo round($percent_borbon,2); ?>%
				</div>
			</li>
			
			<li>
				<span class="total-votes"><?php echo $rostata ?></span> Rostata
				<div class="results-bar" style="width: <?php echo round($percent_rostata,2); ?>%;">
					 <?php echo round($percent_rostata,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $angusan ?></span>Angusan
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_angusan,2); ?>%;">
					 <?php echo round($percent_angusan,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $balbero ?></span>Balbero
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_balbero,2); ?>%;">
					 <?php echo round($percent_balbero,2); ?>%
				</div>
			</li>
			<li>
			
				<span class="total-votes"><?php echo $enario ?></span>Enario
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_enario,2); ?>%;">
					 <?php echo round($percent_enario,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $dilao ?></span>Dilao
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_dilao,2); ?>%;">
					 <?php echo round($percent_dilao,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $limen ?></span>Limen
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_limen,2); ?>%;">
					 <?php echo round($percent_limen,2); ?>%
				</div>
			</li>
			<li>
			
				<span class="total-votes"><?php echo $peralta ?></span>Peralta
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_peralta,2); ?>%;">
					 <?php echo round($percent_peralta,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $orlanes ?></span>Orlanes
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_orlanes,2); ?>%;">
					 <?php echo round($percent_orlanes,2); ?>%
				</div>
			</li>
			
			<li>
			
				<span class="total-votes"><?php echo $espanol ?></span>Espanol
				<br />
				<div class="results-bar" style="width: <?php echo round($percent_espanol,2); ?>%;">
					 <?php echo round($percent_espanol,2); ?>%
				</div>
			</li>
			
		
		    </ul>
	        
	</fieldset>
	
</body>
</html>
<?php
//$page=$_SERVER['PHP_SELF'];
//header("Refresh: 5; url=$page");
?>

<?php
mysql_free_result($rs_vote);
?>