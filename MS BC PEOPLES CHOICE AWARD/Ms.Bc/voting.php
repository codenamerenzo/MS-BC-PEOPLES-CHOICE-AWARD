<?php

?>
<html>
		<!-- MAO NI LINK SA CSS MARVZ -->
		<link rel="stylesheet" type="text/css" href="STYLE.CSS">
<body background="Resources/bg.jpg" style="background-size: 100%,100%">
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

</br>
<?php
include 'voter.php';
?>
Reminder: Click the Circle to vote then "Press Submit".

<form action="SaveVote.php" method="POST">
<table align="center" class="fontstyle">

	<tr align="center" >
		<td >
			<img class="fvrc_logo2" src="Resources/1 Salado FB Editted.jpg" width="200" height="200"> <br>
			
			<input type="radio" name="contestant" value="Salado" >Salado, Nicha
			
		</td>
		<td>
			<img class="fvrc_logo2" src="Resources/2 Vallejos FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Vallejos">Vallejos, Ellamarie<br>
		</td>
		<td>
			<img class="fvrc_logo2" src="Resources/3 Borbon FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Borbon">Borbon, Ellysa <br>
		</td>
		<td>
			<img class="fvrc_logo2" src="Resources/Rostata FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Rostata">Rostata, Devorah Mae<br>
		</td>
		<td>
			<img class="fvrc_logo2" src="Resources/5 Angusan FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Angusan">Angusan, Angelu<br>
		</td>
		
		<td>
			 <img class="fvrc_logo2" src="Resources/6 Balbero FB Editted.jpg" width="200" height="200"> <br>
			 <input type="radio" name="contestant" value="Balbero">Balbero, Genevev <br>
		</td>
		<tr>
			<td>
			</br>

			</td>
		</tr>
	<tr align="center">
		<td>
			<img class="fvrc_logo2" src="Resources/7 Enario FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Enario">Enario, Maryjoy<br>
		</td>
		
		<td>
			<img class="fvrc_logo2" src="Resources/8 Dilao FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Dilao">Dilao, Julie Ann<br>
		</td>
		
		<td>
			<img class="fvrc_logo2" src="Resources/9 Limen FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Limen">Limen, Ethelyn<br>
		</td>
		<td>
			<img class="fvrc_logo2" src="Resources/10 Peralta FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Peralta">Peralta, Carla<br> 
		</td>
		<td>
			 <img class="fvrc_logo2" src="Resources/11 Orlanes FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Orlanes">Orlanes, Mylene<br>
		</td>
		
		<td>
			 <img class="fvrc_logo2" src="Resources/12 Espanol FB Editted.jpg" width="200" height="200"> <br>
			<input type="radio" name="contestant" value="Espanol">Espanol, Analie<br>
		</td>
	
	</tr>
	
  </table>
 
   
  
  
	<center>
	</br>
	<div class="button">
 	<input type="submit" value="Submit" style="height: 40px; width: 80px; border-radius: 5px; font-size: 20px; background-color: #73AD21; color: white;" required>
	</div>
	</center>
</form>



</body>
</html>
