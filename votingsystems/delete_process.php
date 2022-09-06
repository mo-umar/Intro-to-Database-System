<?php
include_once 'database.php';
$sql = "DELETE FROM voter WHERE Voter_id='" . $_GET["Voter_id"] . "'";
$query_run = mysqli_query($conn, $sql);
if($query_run)
     {
         echo '<script type="text/javascript"> alert("Voter Record Deleted!") </script>';
     }
     else
     {
        echo '<script type="text/javascript"> alert("Voter Record Not Deleted!") </script>';
     }
mysqli_close($conn);
?>