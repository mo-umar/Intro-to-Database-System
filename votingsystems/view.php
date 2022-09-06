<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM voter");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>View Voter Data</title>
</head>
<body>
<h1> View</h1>
<table>
	<tr>
	<th>Voter Id</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Voter DOB</th>
	<th>Voter Party</th>
	<th>Action</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Voter_id"]; ?></td>
	<td><?php echo $row["FirstName"]; ?></td>
	<td><?php echo $row["LastName"]; ?></td>
	<td><?php echo $row["VoterDOB"]; ?></td>
	<td><?php echo $row["VoterParty"]; ?></td>
	<td><a href="delete_process.php?Voter_id=<?php echo $row["Voter_id"]; ?>">Delete</a> ||
	<a href="update_process.php?Voter_id=<?php echo $row["Voter_id"]; ?>">Update</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>