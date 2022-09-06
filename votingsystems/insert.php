<!DOCTYPE html>
<html>
<head>
<title>Voter Registration</title>
</head>
  <body>
  <h1> Voter Registration</h1>
	<form method="post" action="process.php">
		Voter ID:<br>
		<input type="int" name="Voter_id">
		<br><br>
		First Name:<br>
		<input type="text" name="FirstName">
		<br><br>
		Last Name:<br>
		<input type="text" name="LastName">
		<br><br>
		Voter DOB:<br>
		<input type="date" name="VoterDOB">
		<br><br>
		Voter Party:<br>
		<input type="text" name="VoterParty">
		<br><br>
		<input type="submit" name="save" value="Submit">
		<input type="reset" onclick="return confirm('Do you really want to reset?')" /> 
	</form>
  </body>
</html>