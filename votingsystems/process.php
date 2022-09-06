<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $Voter_id = $_POST['Voter_id'];
	 $FirstName = $_POST['FirstName'];
	 $LastName = $_POST['LastName'];
	 $VoterDOB= $_POST['VoterDOB'];
	 $VoterParty= $_POST['VoterParty'];
	 $sql = "INSERT INTO voter(Voter_id,FirstName,LastName,VoterDOB,VoterParty)
	 VALUES ('$Voter_id','$FirstName','$LastName','$VoterDOB', '$VoterParty')";
	 $query_run = mysqli_query($conn, $sql);

	 if($query_run)
     {
         echo '<script type="text/javascript"> alert("New Record Added!") </script>';
     }
     else
     {
        echo '<script type="text/javascript"> alert("No New Record Added!") </script>';
     }
	 mysqli_close($conn);
}
?>