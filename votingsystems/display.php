<?php
include_once 'database.php';
$q1 = mysqli_query($conn,"SELECT FirstName, LastName, CandidateDOB, CandidateParty FROM Candidate");
$q2 = mysqli_query($conn,"SELECT LastName, VoterDOB, VoterParty FROM Voter WHERE LastName LIKE 's%'");
$q3 = mysqli_query($conn,"SELECT * FROM locations");
$q4 = mysqli_query($conn,"SELECT * FROM VolunteerLocation");
$q5 = mysqli_query($conn,"SELECT FirstName, LastName, VolunteerDOB, VolunteerLocation FROM Volunteer");
$q6 = mysqli_query($conn,"SELECT LastName, VoterDOB, Locations FROM Voter INNER JOIN Votes ON Voter.Voter_id = Votes.Voter_id");
$q7 = mysqli_query($conn,"SELECT FirstName, LastName, VoterParty FROM Voter WHERE VoterParty = 'Republican'");
$q8 = mysqli_query($conn,"SELECT FirstName, LastName, VoterParty FROM Voter WHERE VoterParty = 'Democrat'");


?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="style.css">
 <title> Display Queries</title>
 </head>
<body>
<h1> Queries</h1>
<?php
if (mysqli_num_rows($q1) > 0) {
?>
  <table>
  <h2> Q1: Find all candidate running in the election, first name, last name, DOB, and party.
</h2>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Candidate DOB</th>
    <th>Candidate Party</th>
  </tr>
  <?php
$i=0;
while($row = mysqli_fetch_array($q1)) {
?>
<tr>
    <td><?php echo $row["FirstName"]; ?></td>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["CandidateDOB"]; ?></td>
    <td><?php echo $row["CandidateParty"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q2) > 0) {
?>
  <table>
 <h2>Q2: Display the voters last name which starts with “S”.
</h2>
   <tr>
    <th>Last Name</th>
    <th>Voter DOB</th>
    <th>Voter Party</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q2)) {
?>
<tr>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["VoterDOB"]; ?></td>
    <td><?php echo $row["VoterParty"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q3) > 0) {
?>
  <table>
 <h2> Q3: Find all the poll location.
</h2>
   <tr>
    <th>Location  Id</th>
    <th>Voter Id</th>
    <th>Volunteer Id</th>
    <th>Poll Location</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q3)) {
?>
<tr>
    <td><?php echo $row["Location_id"]; ?></td>
    <td><?php echo $row["Voter_id"]; ?></td>
    <td><?php echo $row["Volunteer_id"]; ?></td>
    <td><?php echo $row["PollLocation"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q4) > 0) {
?>
  <table>
 <h2>Q4: What was outcome for the Volunteer Location.
</h2>
   <tr>
    <th>Volunteer Location</th>
    <th>Outcome</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q4)) {
?>
<tr>
    <td><?php echo $row["VolunteerLocation"]; ?></td>
    <td><?php echo $row["Outcome"]; ?></td>
 
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q5) > 0) {
?>
  <table>
 <h2>Q5: Find all the volunteer, first name, last name, location, and DOB.
</h2>
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Volunteer DOB</th>
    <th>Volunteer Location</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q5)) {
?>
<tr>
    <td><?php echo $row["FirstName"]; ?></td>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["VolunteerDOB"]; ?></td>
    <td><?php echo $row["VolunteerLocation"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q6) > 0) {
?>
  <table>
 <h2>Q6: What is the DOB and last name for the voters and which location did they go to. 
</h2>
   <tr>

    <th>Last Name</th>
    <th>Voter DOB</th>
    <th>Locations</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q6)) {
?>
<tr>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["VoterDOB"]; ?></td>
    <td><?php echo $row["Locations"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q7) > 0) {
?>
  <table>
 <h2>Q7: Find all voter who are republican. 
</h2>
   <tr>

    <th>First Name</th>
    <th>Last Name</th>
    <th>Voter Party</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q7)) {
?>
<tr>
    <td><?php echo $row["FirstName"]; ?></td>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["VoterParty"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


<?php
if (mysqli_num_rows($q8) > 0) {
?>
  <table>
 <h2>Q8: Find all voter who are democrat.
</h2>
   <tr>

    <th>First Name</th>
    <th>Last Name</th>
    <th>Voter Party</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($q8)) {
?>
<tr>
    <td><?php echo $row["FirstName"]; ?></td>
    <td><?php echo $row["LastName"]; ?></td>
    <td><?php echo $row["VoterParty"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>