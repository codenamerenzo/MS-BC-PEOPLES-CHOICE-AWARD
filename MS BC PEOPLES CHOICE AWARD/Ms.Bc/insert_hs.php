<html>
	<a href="main.php">back</a>
	<link rel="stylesheet" type="text/css" href="STYLE.CSS">
	<center>
	<div class="entry_form">
		<form action="insert_hs_to_db.php" method="POST">
			I.D. number:<input type="text" name="student_number" Required><br><br>
			Lastname:<input type="text" name="last_name" Required><br><br>
			Firstname:<input type="text" name="first_name" Required><br><br>
			Department:<input type="text" name="depart" Required><br><br>
			<input class="button_entry_form" type="submit" name="submit" value="Submit"><br>
		</form>
	</div>
</html>